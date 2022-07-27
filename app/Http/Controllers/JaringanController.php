<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Models\Jaringan;

class JaringanController extends Controller
{
    public function index()
    {
        return view('layouts/map', [
            "title" => "Peta Jaringan Itenas",
            "info" => "Jaringan",
            "namegd1" => Jaringan::find(1)->Gedung,
            "jargd1" => Jaringan::find(1),
            "namegd2" => Jaringan::find(2)->Gedung,
            "jargd2" => Jaringan::find(2),
            "namegd3" => Jaringan::find(3)->Gedung,
            "jargd3" => Jaringan::find(3),
            "namegd4" => Jaringan::find(4)->Gedung,
            "jargd4" => Jaringan::find(4),
            "namegd5a" => Jaringan::find(5)->Gedung,
            "jargd5a" => Jaringan::find(5),
            "namegd5b" => Jaringan::find(6)->Gedung,
            "jargd5b" => Jaringan::find(6),
            "namegd5c" => Jaringan::find(7)->Gedung,
            "jargd5c" => Jaringan::find(7),
            "namegd6a" => Jaringan::find(8)->Gedung,
            "jargd6a" => Jaringan::find(8),
            "namegd6b" => Jaringan::find(9)->Gedung,
            "jargd6b" => Jaringan::find(9),
            "namegd8" => Jaringan::find(10)->Gedung,
            "jargd8" => Jaringan::find(10),
            "namegd9" => Jaringan::find(11)->Gedung,
            "jargd9" => Jaringan::find(11),
            "namegd10" => Jaringan::find(12)->Gedung,
            "jargd10" => Jaringan::find(12),
            "namegd11" => Jaringan::find(13)->Gedung,
            "jargd11" => Jaringan::find(13),
            "namegd12" => Jaringan::find(14)->Gedung,
            "jargd12" => Jaringan::find(14),
            "namegd13" => Jaringan::find(15)->Gedung,
            "jargd13" => Jaringan::find(15),
            "namegd14" => Jaringan::find(16)->Gedung,
            "jargd14" => Jaringan::find(16),
            "namegd14a" => Jaringan::find(17)->Gedung,
            "jargd14a" => Jaringan::find(17),
            "namegd15" => Jaringan::find(18)->Gedung,
            "jargd15" => Jaringan::find(18),
            "namegd16" => Jaringan::find(19)->Gedung,
            "jargd16" => Jaringan::find(19),
            "namegd17" => Jaringan::find(20)->Gedung,
            "jargd17" => Jaringan::find(20),
            "namegd18" => Jaringan::find(21)->Gedung,
            "jargd18" => Jaringan::find(21),
            "namegd19a" => Jaringan::find(22)->Gedung,
            "jargd19a" => Jaringan::find(22),
            "namegd19b" => Jaringan::find(23)->Gedung,
            "jargd19b" => Jaringan::find(23),
            "namegd20" => Jaringan::find(24)->Gedung,
            "jargd20" => Jaringan::find(24),
            "namegd21" => Jaringan::find(25)->Gedung,
            "jargd21" => Jaringan::find(25),
            "namegd22" => Jaringan::find(26)->Gedung,
            "jargd22" => Jaringan::find(26),
            "namegd23" => Jaringan::find(27)->Gedung,
            "jargd23" => Jaringan::find(27),
            "namegd24" => Jaringan::find(28)->Gedung,
            "jargd24" => Jaringan::find(28),
            "namegd25" => Jaringan::find(29)->Gedung,
            "jargd25" => Jaringan::find(29)
        ]);
    }
}