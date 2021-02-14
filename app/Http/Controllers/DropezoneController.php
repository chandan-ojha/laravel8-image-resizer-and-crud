<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropezoneController extends Controller
{
    //
    public function dropzone()
    {
    	return view('dropezone');

    }

    public function dropezoneStore(Request $request)
    {
        $image=$request->file('file');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);

    }
}
