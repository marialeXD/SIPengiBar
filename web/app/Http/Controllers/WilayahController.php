<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;

class WilayahController extends Controller
{
public function index()
{
    $data = Wilayah::paginate(10);
    return view("pages.wilayah.list",compact("data"));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view("pages.wilayah.form");
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    //for save the data
    $request->validate([
        'origin' => 'required|max:50',
        'destination' => 'required|max:50',
        'ongkos' => 'required|digits_between:1,6|numeric'
    ]);
    
    Wilayah::create($request->except("_token"));

    $request->session()->flash("info","Berhasil Menambah Data Wilayah");
    return redirect()->route("wilayah.index");
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //for edit the data 
    $data = Wilayah::find($id);

    return view("pages.wilayah.form",compact("data"));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $request->validate([
        'origin' => 'required|max:50',
        'destination' => 'required|max:50',
        'ongkos' => 'required|digits_between1,6|numeric'
    ]);

    Wilayah::where("id",$id)
            ->update($request->except(["_token","_method"]));
    
    $request->session()->flash("info","Berhasil Mengubah Data wilayah");
    return redirect()->route("wilayah.index");
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    //for delete the data
    Wilayah::destroy($id);

    return redirect()->route("wilayah.index")
            ->with("info","Berhasil Menghapus Data wilayah");
    }
}

