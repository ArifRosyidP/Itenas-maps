<?php

namespace App\Http\Controllers;

use App\Models\detailssid;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return view('part/jtable', [
            "title" => "Detail Jaringan",
            "ssids" => detailssid::all(),
        ]);
    }
}
