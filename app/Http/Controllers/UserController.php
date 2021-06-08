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
    public function updateProfile($id)
    {
        Request()->validate([
            'alamat_pelanggan' => 'required',
            'no_telepon_pelanggan' => 'required',
            'email' => 'required',

        ]);
        if (Auth::user()->hasRole('pelanggan')) {
            $file = Request()->foto_profile;
            $filename = Auth::user()->id. '.' .$file->extension(); 
            $file->move(public_path('/img/foto_profile'),$filename);
            $data = 
            [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'no_telepon_pelanggan' => Request()->no_telepon_pelanggan,
            'alamat' => Request()->alamat_pelanggan,
            'email' => Request()->email,
            'foto_profile' => $filename,
            'desc_fixer'=> Request()->desc_fixer,
            ];
            $this->UserModel->updateProfile($id,$data);
        }else if (Auth::user()->hasRole('fixer')) {
            $file = Request()->foto_profile;
            $filename = Auth::user()->id. '.' .$file->extension(); 
            $file->move(public_path('/img/foto_profile'),$filename);
            $file_poster = Request()->poster;
            $filename_poster = Auth::user()->id.'.'.$file_poster->extension();
            $file_poster->move(public_path('/img/poster'),$filename_poster);
            $data = 
        [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'no_telepon_pelanggan' => Request()->no_telepon_pelanggan,
            'alamat' => Request()->alamat_pelanggan,
            'email' => Request()->email,
            'foto_profile' => $filename,
            'poster' => $filename_poster,
            'desc_fixer'=> Request()->desc_fixer,
        ];
        $this->UserModel->updateProfile($id,$data);
        }
        return redirect()->route('profile')->with('message','data berhasil di ubah');
    }
}
