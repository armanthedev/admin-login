<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class DashboardController extends Controller
{

    
    public function index(){
        $check = Session::get('admin');

       if (!$check){
           return redirect('admin');
       }

        return view('dashboard');
    }

    public function logout(){
        Session::flush('admin');
        return redirect ('admin');
    }
}
