<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index(){
    return view('home');
 }
 function sold(Request $request){

    // $name =$request->name;
    // $age =$request->age;
    // $model =$request->input('model') ;

    // return "My name is ${name}.I am ${age} years old.I am selling a  car." ;



    // $data['name']= $request->name;
    // $data['age'] = $request->age;
    // // $data['car'] = $request->car;
    // // return "my name is {$name} i am {$age} years old.";
    // return view('sold',$data);

    $pin= $request->header('pin');
    $city= $request->input('city');
    $postcode= $request->input('postcode');
    $n= $request->name;
    $a= $request->age;

    return array(
        "pin"=>$pin,
        "city"=>$city,
        "postcode"=>$postcode,
        "nAme"=>$n,
        "aGe"=>$a
    );

 }
}
