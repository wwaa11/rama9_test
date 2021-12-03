<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    //
    public function index(){

        $datas = Data::all();

        return view('createdata')->with('datas' , $datas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'tel' => 'required|numeric',
        ]);

        $data = new Data;
        $data->name = $request->name;
        $data->build = $request->build;
        $data->depart = $request->depart;
        $data->tel = $request->tel;

        $data->save();

        $request->session()->flash('status', $request->name. ' is create sucessfully');

        return redirect('/home');
    }

    public function edit($id)
    {
        $data = Data::find($id);

        return view('editData')->with('data' , $data);
    }

    public function update(Request $request, $id)
    {
        $data = Data::find($id);

        $request->validate([
            'name' => 'required|max:255',
            'tel' => 'required|numeric',
        ]);

        $data->name = $request->name;
        $data->build = $request->build;
        $data->depart = $request->depart;
        $data->tel = $request->tel;

        $data->save();

        $request->session()->flash('status', $request->name. ' is update sucessfully');
        return redirect('/home');
    }

    public function destroy($id)
    {
        $data = Data::find($id);

        $dataname = $data->name;
        $data->delete();

        Session()->flash('status', $dataname. " is delete successfully");
        return redirect('/home');
    }
}
