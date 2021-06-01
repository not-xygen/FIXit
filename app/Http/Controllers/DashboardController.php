<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\UserModel;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }
    
    public function index()
    
    {
        if(Auth::user()->hasRole('admin'))
        {
            $data['count'] = $this->UserModel->countProfile();
            return view('admin.admindashboard',['count'=>$data['count']]);
        }else if(Auth::user()->hasRole('fixer'))
        {
            return view('dashboard');
        }else if(Auth::user()->hasRole('pelanggan'))
        {
            return view('dashboard');
        }
    }
}
