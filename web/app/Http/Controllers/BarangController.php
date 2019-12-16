<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisBarang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JenisBarang::paginate(10);
        return view("pages.barang.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.barang.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'barang' => 'required|max:50'
        ]);
        JenisBarang::create($request->except("_token"));
        
        $request->session()->flash("info","Berhasil menambah data Jenis Barang");
        return redirect()->route(barang.index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = JenisBarang::find($id);

        return view("pages.barang.form",compact("data"));
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
        //
        $request->validate([
            'barang' => 'required|max:50'
        ]);

        JenisBarang::where("id",$id)
                ->update($request->except(["_token","_method"]));
        
        $request->session()->flash("info","Berhasil mengupdate data Jenis Barang");
        return redirect()->route(barang.index);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        JenisBarang::destroy($id);

        return redirect()->route("barang.index")
                ->with("info","Jenis Barang telah dihapus");
    }
}
