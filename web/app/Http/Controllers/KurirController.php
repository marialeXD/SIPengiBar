<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kurir::paginate(10);
        return view("pages.kurir.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.kurir.form");
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
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'required|max:25',
            'email' => 'required|email|max:50'
        ]);
        
        Staff::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Menambah Data Staff");
        return redirect()->route("kurir.index");
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
        $data = Kurir::find($id);

        return view("pages.kurir.form",compact("data"));
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
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'required|max:25',
            'email' => 'required|email|max:50'
        ]);

        Staff::where("id",$id)
                ->update($request->except(["_token","_method"]));
        
        $request->session()->flash("info","Berhasil Mengubah Data Kurir");
        return redirect()->route("kurir.index");
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
        Staff::destroy($id);

        return redirect()->route("kurir.index")
                ->with("info","Berhasil Menghapus Data Kurir");
    }
}
