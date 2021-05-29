<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }

    public function dataPelanggan()
    {
        $data['data_pelanggan'] = $this->UserModel->getPelanggan();
        return view('admin.DaftarUser',['data_pelanggan'=>$data['data_pelanggan']]);
    }
    public function dataFixer()
    {
        $data['data_fixer'] = $this->UserModel->getFixer();
        return view('admin.DaftarFixer',['data_fixer'=>$data['data_fixer']]);
    }

    public function profile()
    {
           return view('pelanggan.p_profile');
    }
}
