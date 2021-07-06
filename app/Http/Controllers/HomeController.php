<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
        return "Home!!";
    }
     public function ura(){
        return view('pages.ura');
    }
    public function content(){
        $data=[];
        $data["nume"]="Popescu";
        $data["prenume"]="Bogdan";
        return view('content',$data);
    }
    public function foreach(){
        $people=['Popescu Bogdan','Ionescu George','Mihaiescu Ion'];
        return view('pages.foreach',compact('people'));
    }
}
