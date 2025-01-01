<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
// use Iluminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function showProvince(){
        $provinces = Province::all();
        // $provinces = DB::table('provinces')->get();
        return view('province', compact('provinces'));
    }
}
