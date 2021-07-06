<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return "Welcome!!";
    }
    public function contact(){    
        return view('contact');
    }
    public function date1(){
       $name="Popescu <span style='color:red'>Bogdan</span>";
       return view('pages.date1')->with('name',$name);
    }
    public function data2(){
       return view('pages.data2')->with(["nume"=>"Popescu",
                                        "prenume"=>"Bogdan"    
                                        ]);
    }
    public function data3(){
        $data=[];
        $data["nume"]="Popescu";
        $data["prenume"]="Bogdan";
        return view('pages.data2',$data);
    }
    public function data4(){
        $nume="Popescu";
        $prenume="Bogdan";
        return view('pages.data2',compact('nume','prenume'));
    }
}
