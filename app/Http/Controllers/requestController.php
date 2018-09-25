<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller
{
    public function index(Request $request){
echo "Welcome ".$request->segment(2). "You're ".$request->segment(3). " years old";
    }
}
