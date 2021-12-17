<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function biodata()
    {
        return view('halaman.biodata');
    }

    public function kirim(Request $request)
    {
        // dd($request->all());
        $nama = $request['firstname'];
        $gender = $request['gender'];

        return view('halaman.home', compact('nama','gender'));

    }
}
