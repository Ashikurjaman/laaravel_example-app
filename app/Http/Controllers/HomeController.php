<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class HomeController extends Controller
{
 public function index(){
    return view('home');
 }
//  function sold(Request $request){

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




        // $img = $request->file('photo');
        // $img->storeAs('upload',$img->getClientOriginalName());
        // $img->move(public_path('upload'),$img->getClientOriginalName());


        //     return true;


            // return $request->ip();
            // return $request->getAcceptableContentTypes();

            // if($request->accepts(['text/html'])){
            //     return 1;

            // }
            // else {
            //       return 0;
            // }



            // return $request->cookie('Cookie_1');



                    // $code=203;
                    // $content= array("name"=> "jack", 'city'=>'london');

                    // return response()->json($content,$code);





//  }

function sold1(){

    return redirect('/sold2');

}
function sold2(){

return 'hello2';
}

}
