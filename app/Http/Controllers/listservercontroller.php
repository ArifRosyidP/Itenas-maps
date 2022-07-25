<?php

namespace App\Http\Controllers;

use App\Models\Listserver;

use Illuminate\Http\Request;

class listservercontroller extends Controller
{
    public function index()
    {
        return view('part/listservertable', [
            "title" => "Tabel List Server",
            "listservers" => Listserver::all()
        ]);
    }
}