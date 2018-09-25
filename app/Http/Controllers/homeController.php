<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class homeController extends Controller
{
     public function getUrlData(Request $request){
        echo "Name: ".$request->name." <br> Age: ".$request->age;
    }

   public function index(){
        $students=[
            "name"=>"Masud Alam",
            "age"=>32
            ];
        return view('test',$students);
 
    }
 
}