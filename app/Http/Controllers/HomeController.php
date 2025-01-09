<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // user
    public function paten(){
        return view("home.paten");
    }
    public function tes(){
        return view("home.tes");
    }

    //history
    public function history(){
        return view("home.history");
    }
    public function pktp(){
        return view("home.historyp");
    }


    //smartvillage
    public function smart(){
        return view("home.smart");
    }
    
    //pelayanan


    public function perbaruanktp(){
        return view("pelayanan.perbaruanktp");
    }

    //admin
    public function admin(){
        return view("admin.index");
    }
    
}
