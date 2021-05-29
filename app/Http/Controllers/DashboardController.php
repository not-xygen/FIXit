<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function index()
    
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('admin.admindashboard');
        }else if(Auth::user()->hasRole('fixer'))
        {
            return view('dashboard');
        }else if(Auth::user()->hasRole('pelanggan'))
        {
            return view('dashboard');
        }
    }
}
