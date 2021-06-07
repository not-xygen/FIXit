<?php

namespace App\Http\Controllers;
use App\Models\PemesananModel;
use Illuminate\Http\Request;
use App\Models\UserModel;
class PelangganController extends Controller
{
    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->middleware('auth');
        $this->UserModel = new UserModel();
    }
    
    public function pemesanan($id_fixer)
    {
        if (!$this->PemesananModel->dataInvoice($id_fixer)) {
            abort(404);
        }
        $data_fixer = ['data_fixer'=> $this->PemesananModel->dataInvoice($id_fixer)];
        return view('pelanggan.p_pemesanan',compact('data_fixer'));
    }
    public function listjasa()
    {
        $data['data_fixer'] = $this->UserModel->getFixer();
        return view('pelanggan.p_daftarjasa',['data_fixer'=>$data['data_fixer']]);
    }
}
