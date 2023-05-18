<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index(){
    return view('home');
 }
 function sold(Request $request):bool{

    // $name =$request->name;
    // $age =$request->age;
    // $model =$request->input('model') ;

    // return "My name is ${name}.I am ${age} years old.I am selling a  car." ;



    // $data['name']= $request->name;
    // $data['age'] = $request->age;
    // // $data['car'] = $request->car;
    // // return "my name is {$name} i am {$age} years old.";
    // return view('sold',$data);



    // $pin= $request->header('pin');
    // $city= $request->input('city');
    // $postcode= $request->input('postcode');
    // $n= $request->name;
    // $a= $request->age;

    // return array(
    //     "pin"=>$pin,
    //     "city"=>$city,
    //     "postcode"=>$postcode,
    //     "nAme"=>$n,
    //     "aGe"=>$a
    // );


    //    return  $request->input();



    // $img = $request->file('photo');
    // $fileSize = filesize($img);
    // $filetype = filetype($img);
    // $fileOrginalname =$img->getClientOriginalName();
    // $fileExtension = $img->getClientOriginalExtension();
    // $fileTempName = $img->getFilename();

    //     return array(
    //         "filesize" => $fileSize,
    //         "filetype" => $filetype,
    //         "fileOrginalname" => $fileOrginalname,
    //         "fileExtension" => $fileExtension,
    //         "fileTempName" => $fileTempName

    //     );




        $img = $request->file('photo');
        $img->move(public_path('upload'),$img->getClientOriginalName());


            return true;




 }
}
