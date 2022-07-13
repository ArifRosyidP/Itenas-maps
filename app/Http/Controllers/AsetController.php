<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Models\Aset;

class AsetController extends Controller
{
    public function index()
    {
        return view('layouts/map', [
            "title" => "Peta Aset Itenas",
            "info" => "Aset",
            "namegd1" => Aset::find(1)->Gedung,
            "asgd1" => Aset::find(1),
            "namegd2" => Aset::find(2)->Gedung,
            "asgd2" => Aset::find(2),
            "namegd3" => Aset::find(3)->Gedung,
            "asgd3" => Aset::find(3),
            "namegd4" => Aset::find(4)->Gedung,
            "asgd4" => Aset::find(4),
            "namegd5a" => Aset::find(5)->Gedung,
            "asgd5a" => Aset::find(5),
            "namegd5b" => Aset::find(6)->Gedung,
            "asgd5b" => Aset::find(6),
            "namegd5c" => Aset::find(7)->Gedung,
            "asgd5c" => Aset::find(7),
            "namegd6a" => Aset::find(8)->Gedung,
            "asgd6a" => Aset::find(8),
            "namegd6b" => Aset::find(9)->Gedung,
            "asgd6b" => Aset::find(9),
            "namegd8" => Aset::find(10)->Gedung,
            "asgd8" => Aset::find(10),
            "namegd9" => Aset::find(11)->Gedung,
            "asgd9" => Aset::find(11),
            "namegd10" => Aset::find(12)->Gedung,
            "asgd10" => Aset::find(12),
            "namegd11" => Aset::find(13)->Gedung,
            "asgd11" => Aset::find(13),
            "namegd12" => Aset::find(14)->Gedung,
            "asgd12" => Aset::find(14),
            "namegd13" => Aset::find(15)->Gedung,
            "asgd13" => Aset::find(15),
            "namegd14" => Aset::find(16)->Gedung,
            "asgd14" => Aset::find(16),
            "namegd14a" => Aset::find(17)->Gedung,
            "asgd14a" => Aset::find(17),
            "namegd15" => Aset::find(18)->Gedung,
            "asgd15" => Aset::find(18),
            "namegd16" => Aset::find(19)->Gedung,
            "asgd16" => Aset::find(19),
            "namegd17" => Aset::find(20)->Gedung,
            "asgd17" => Aset::find(20),
            "namegd18" => Aset::find(21)->Gedung,
            "asgd18" => Aset::find(21),
            "namegd19a" => Aset::find(22)->Gedung,
            "asgd19a" => Aset::find(22),
            "namegd19b" => Aset::find(23)->Gedung,
            "asgd19b" => Aset::find(23),
            "namegd20" => Aset::find(24)->Gedung,
            "asgd20" => Aset::find(24),
            "namegd21" => Aset::find(25)->Gedung,
            "asgd21" => Aset::find(25),
            "namegd22" => Aset::find(26)->Gedung,
            "asgd22" => Aset::find(26),
            "namegd23" => Aset::find(27)->Gedung,
            "asgd23" => Aset::find(27),
            "namegd24" => Aset::find(28)->Gedung,
            "asgd24" => Aset::find(28),
            "namegd25" => Aset::find(29)->Gedung,
            "asgd25" => Aset::find(29)
        ]);
    }
}
