<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            return view('fixer.f_dashboard');
            
        }else if(Auth::user()->hasRole('pelanggan'))
        {   
            return view('pelanggan.p_dashboard');
        }
    }
}
