<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CastController extends Controller
{
    public function index(){
        $casts=DB::table('cast')->get();
        
        return view('cast.index',compact('casts'));
    }
}
