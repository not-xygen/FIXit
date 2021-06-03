<?php

namespace App\Http\Controllers;
use App\Models\PemesananModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->middleware('auth');
    }
    
    public function pemesanan($id_fixer)
    {
        if (!$this->PemesananModel->dataInvoice($id_fixer)) {
            abort(404);
        }
        $data_fixer = ['data_fixer'=> $this->PemesananModel->dataInvoice($id_fixer)];
        return view('pelanggan.p_invoice',compact('data_fixer'));
    }
}
