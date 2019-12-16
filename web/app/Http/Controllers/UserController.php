<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index(){
        $data = User::find(auth()->user()->id);

        return view("pages.user.form",compact("data"));
    }

    public function simpan(Request $request){
        $request->validate([
            "name" => "required|max:100"
        ]);

        if($request->hasFile("profilepic")){
            Storage::delete("/public/profile/".auth()->user()->filename);
            $fullpath = $request->file("profilepic")
                        ->store("/public/profile");

            $filename = explode("/",$fullpath)[2];

            User::where("id",auth()->user()->id)
                ->update(["name" => $request->name,
                        "filename" => $filename ]);
        }else{
            User::where(auth()->user()->id)
                    ->update(["name" => $request->name]);
        }

        return redirect()->route("user");
    }
}
