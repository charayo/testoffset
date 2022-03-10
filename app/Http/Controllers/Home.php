<?php

namespace App\Http\Controllers;

use App\Models\Wptg_options;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function loadHome(){
       $data =  Wptg_options::all()->where('option_name','=','admin_email')->first();
    // $data = 'ayotest';
        return view('welcome')->with('dataFrom',$data);
    }
}
