<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('pages.form');
    }
    public function test1(){
        if(empty($_POST["name1"])){
            $bau = "Hello! Please input your name: <br/>";      
        }else{
            $bau = "Good morning <b>".$_POST["name1"]."</b><br/>";
        }
        return view('pages.test1')->with('bau',$bau);
    }
    public function test2(){
        return view('pages.test2');
    }
    public function test3(){
        if(empty($_POST["name1"])){
            $bau = "Hello! Please input your name: <br/>";      
        }else{
            $bau = "Good morning <b>".$_POST["name1"]."</b><br/>";
        }
        return view('pages.test3')->with('bau',$bau);
    }
    public function test4(){
        if(empty($_POST["name1"])){
            $bau = "";      
        }else{
            $bau = $_POST["name1"];
        }
        return view('pages.test4')->with('bau',$bau);
    }
    public function test5(){
        if(empty($_POST["name1"])){
            $bau = "";      
        }else{
            $bau = $_POST["name1"];
        }
        return view('pages.test5')->with('bau',$bau);
    }
    public function test6(){
        $var1="";
        $var2="";
        $var3="";
        if(!isset($_POST["var1"])){
            $var1="";
        }else{
            $var1=$_POST["var1"];
        }
        if(!isset($_POST["var2"])){
            $var2="";
        }else{
            $var2=$_POST["var2"];
        }
        $var3=(int)$var1+(int)$var2;
        return view('form',compact('var1','var2','var3'));
    }
    public function test7(){
        if(!isset($_POST["name1"])){
            $var1="";
        }else{
            $var1=$_POST["name1"];
        }
        if(!isset($_POST["char"])){
            $bau=$var1;
        }elseif($_POST["char"]=="Lower"){
            $bau=strtolower($_POST["name1"]);
        }elseif($_POST["char"]=="Upper")
        $bau=strtoupper($_POST["name1"]);
        return view('form1')->with('bau',$bau);
    }
    public function test8(){
        $var1="";
        $var2="";
        $var3="";
        if(!isset($_POST["var1"])){
            $var1="";
        }else{
            $var1=$_POST["var1"];
        }
        if(!isset($_POST["var2"])){
            $var2="";
        }else{
            $var2=$_POST["var2"];
        }
        if(!isset($_POST["var3"])){
            $var3="";
        }else{
            $var3=$_POST["var3"];
        }
        return view('form2',compact('var1','var2','var3'));
    }
    public function test9(){
        return view('form3');
    }
    public function test10(){
        if(!isset($_POST["evaluari"])){
            $var="";
        }else{
            $var=$_POST["evaluari"];
        }
        return view('form4')->with('var',$var);
    }
    
}
