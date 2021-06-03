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
            'nama_pelanggan' => Request()->nama_pelanggan,
            'nama_fixer' => Request()->nama_fixer,
            'no_hp_fixer' => Request()->no_hp_fixer,
            // 'foto_device' => Request()->foto_device,
            'no_hp_pelanggan' => Request()->no_hp_pelanggan,
            'alamat_pelanggan' => Request()->alamat_pelanggan,
            'alamat_fixer' => Request()->alamat_fixer,
        ];
        $this->PemesananModel->invoice($data);
        return redirect()->route('dashboard');
    }
    public function riwayatPemesanan($id_pelanggan)
    {
        $riwayat_data = ['riwayat_data' => $this->PemesananModel->getRiwayat($id_pelanggan)];
        return view ('pelanggan.p_riwayat',$riwayat_data);
    }


    //
}
