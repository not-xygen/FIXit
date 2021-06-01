<?php

namespace App\Http\Controllers;

use App\Models\PemesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PemesananController extends Controller
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
    public function inputInvoice()
    {
        $data = 
        [
            'id_fixer' => Request()->id_fixer,
            'id_pelanggan' => Request()->id_pelanggan,
            'jenis_device' => Request()->jenis_device,
        
        ];
        $this->PemesananModel->invoice($data);
        return redirect()->route('dashboard');
    }


    //
}
