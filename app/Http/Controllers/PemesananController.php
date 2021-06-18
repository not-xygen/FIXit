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
        Request()->validate([
            'foto_device' => 'required|mimes:jpg,png|max:1024',
            'alamat_pelanggan' => 'required',
            'jenis_device' => 'Required',
            'jenis_kerusakan' => 'Required',
        ],
        [

        ]);

        $file = Request()->foto_device;
        $filename = date('Y-m-d H'). '.' .$file->extension(); 
        $file->move(public_path('/img/foto_device'),$filename);

        $data = 
        [
            'id_fixer' => Request()->id_fixer,
            'id_pelanggan' => Auth::user()->id,
            'jenis_device' => Request()->jenis_device,
            'nama_pelanggan' => Request()->nama_pelanggan,
            'nama_fixer' => Request()->nama_fixer,
            'no_hp_fixer' => Request()->no_hp_fixer,
            'no_hp_pelanggan' => Request()->no_hp_pelanggan,
            'alamat_pelanggan' => Request()->alamat_pelanggan,
            'alamat_fixer' => Request()->alamat_fixer,
            'foto_device' => $filename,
            'jenis_kerusakan' => Request()->jenis_kerusakan,
  
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
    public function riwayatPemesananAdmin()
    {
        $riwayat_data = ['riwayat_data' => $this->PemesananModel->getRiwayatAdmin()];
        return view ('admin.a_pesanan',$riwayat_data);
    }
    
    //
}
