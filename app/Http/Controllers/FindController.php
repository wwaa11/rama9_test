<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class FindController extends Controller
{
    //
    public function index(){
        return view('findindex');
    }

    public function show(Request $request){

        $input = $request->input;
        $datas = Data::query()
            ->where('name', 'LIKE', "%{$input}%")
            ->orWhere('build', 'LIKE', "%{$input}%") 
            ->orWhere('depart', 'LIKE', "%{$input}%") 
            ->orWhere('tel', 'LIKE', "%{$input}%") 
            ->get();

        return view('findshow')->with('input', $input)->with('datas', $datas);
    }

}
