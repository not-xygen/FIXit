<?php

namespace App\Http\Controllers;
use App\Models\PelangganModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    //
    public function __construct()
    {
        $this->PelangganModel = new PelangganModel();
    }
    public function detail($id_pelanggan)
    {
        if (!$this->PelangganModel->detailData($id_pelanggan)) {
            abort(404);
        }
        $data = [
            'data_pelanggan'=> $this->PelangganModel->detailData($id_pelanggan),
        ];
        return view('menu.detail',$data);
    }

}
