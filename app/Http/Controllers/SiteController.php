<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home(){
        return view('HomePage');
    }
  
    function About(){
        return view('AboutPage');
    }
  
    function Contact(){
        return view('ContactPage');
    }
    //parameter pasing method
    function MyName($namevalue){
        return $namevalue;
    }
    // multi parameter pasing method
    function FullName($firstName, $MiddleName, $lastName){
        return "FirstName:". $firstName . "<br> MiddleName:". $MiddleName. "<br> LastName:".$lastName;
    }
  
}
