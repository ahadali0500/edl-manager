<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class sources extends Controller
{
    //
    public function showSourcesForm()
    {
        return view('users.add-sources');
    }

    public function index()
    {
        $user_id=Session::get('edlManagerUserId');
        $data = DB::table('sources')->where(['user_id' => $user_id])->get();
        return view('users.manage-sources', compact('data'));
    }

    public function addSources(Request $request)
    {
        $fileName =  time() . '.txt';
        Storage::disk('local')->put('public/url/' . $fileName, $request->manual_entries);

        // Insert the data into the database, including the file name
        $user_id=Session::get('edlManagerUserId');
        $data = DB::table('sources')->insert([
            'user_id' => $user_id,
            'name' => $request->name,
            'description' => $request->description,
            'file' => $fileName, // Save the file name in the database
        ]);
        return response()->json(['success' => true]);

    }
    
    
}
