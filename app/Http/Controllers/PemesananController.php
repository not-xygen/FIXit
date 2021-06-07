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

    public function inputInvoice()
    {
        $file = Request()->foto_device;
        $filename = Request()->nama_pelanggan. '.' .$file->extension(); 
        $file->move(public_path('/img/foto_device'),$filename);

        $data = 
        [
            'id_fixer' => Request()->id_fixer,
            'id_pelanggan' => Auth::user()->id,
            'jenis_device' => Request()->jenis_device,
            'nama_pelanggan' => Request()->nama_pelanggan,
            'nama_fixer' => Request()->nama_fixer,
            'no_hp_fixer' => Request()->no_hp_fixer,
            // 'foto_device' => Request()->foto_device,
            'no_hp_pelanggan' => Request()->no_hp_pelanggan,
            'alamat_pelanggan' => Request()->alamat_pelanggan,
            'alamat_fixer' => Request()->alamat_fixer,
            'foto_device' => $filename,
  
        ];
        $this->PemesananModel->inputPemesanan($data);
        return redirect()->route('dashboard');
    }
    public function riwayatPemesananPelanggan($id_pelanggan)
    {
        $riwayat_data = ['riwayat_data' => $this->PemesananModel->getRiwayatPelanggan($id_pelanggan)];
        return view ('pelanggan.p_riwayat',$riwayat_data);
    }
    public function riwayatPemesananFixer($id_fixer)
    {
        $riwayat_data = ['riwayat_data' => $this->PemesananModel->getRiwayatFixer($id_fixer)];
        return view ('fixer.f_pesanan',$riwayat_data);
    }
    
    //
}
