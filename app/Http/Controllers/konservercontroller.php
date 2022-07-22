<?php

namespace App\Http\Controllers;

use App\Models\Konserver;
use Illuminate\Http\Request;

class konservercontroller extends Controller
{
    public function index()
    {
        return view('part/kontable', [
            "title" => "Tabel Kondisi Server",
            "konservers" => Konserver::all()
            // "ssids" => Konserver::filter(request(['search']))->get(),
        ]);
    }
}