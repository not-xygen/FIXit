<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

class FixerController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }
    public function editPesanan($id)
    {
        $data = [
            'status' => Request()->status
        ];
        $this->UserModel->editPesanan($id,$data); 
        return redirect()->route('dashboard');
    }
}
