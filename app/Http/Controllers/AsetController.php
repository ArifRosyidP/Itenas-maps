<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;
use App\Models\Aset;
use Illuminate\Support\Facades\Http;

class AsetController extends Controller
{
    public function index()
    {
        function aset($idgedung){
            $res = Http::get(config('app.URL_API').'sum-aset-by-kodegedung',[
                'APIKEY'=>config('app.API_KEY'), 
                'kodegedung'=>$idgedung, 
            ]); 
            $json=$res->json();
            return
            $json["data"][0]["total_barang"];
        }
        
        return view('layouts/map', [
            "title" => "Peta Aset Itenas",
            "info" => "Aset",
            "namegd1" => Gedung::find(1),
            "asgd1" => aset('01'),
            "namegd2" => Gedung::find(2),
            "asgd2" => aset('02'),
            "namegd3" => Gedung::find(3),
            "asgd3" => aset('03'),
            "namegd4" => Gedung::find(4),
            "asgd4" => aset('04'),
            "namegd5a" => Gedung::find(5),
            "asgd5a" => aset('05'),
            "namegd5b" => Gedung::find(6),
            "asgd5b" => aset('05'),
            "namegd5c" => Gedung::find(7),
            "asgd5c" => aset('05'),
            "namegd6a" => Gedung::find(8),
            "asgd6a" => aset('06'),
            "namegd6b" => Gedung::find(9),
            "asgd6b" => aset('06'),
            "namegd8" => Gedung::find(10),
            "asgd8" => aset('08'),
            "namegd9" => Gedung::find(11),
            "asgd9" => aset('09'),
            "namegd10" => Gedung::find(12),
            "asgd10" => aset('10'),
            "namegd11" => Gedung::find(13),
            "asgd11" => aset('11'),
            "namegd12" => Gedung::find(14),
            "asgd12" => aset('12'),
            "namegd13" => Gedung::find(15),
            "asgd13" => aset('13'),
            "namegd14" => Gedung::find(16),
            "asgd14" => aset('14'),
            "namegd14a" => Gedung::find(17),
            "asgd14a" => aset('14'),
            "namegd15" => Gedung::find(18),
            "asgd15" => aset('15'),
            "namegd16" => Gedung::find(19),
            "asgd16" => aset('16'),
            "namegd17" => Gedung::find(20),
            "asgd17" => aset('17'),
            "namegd18" => Gedung::find(21),
            "asgd18" => aset('18'),
            "namegd19a" => Gedung::find(22),
            "asgd19a" => aset('19'),
            "namegd19b" => Gedung::find(23),
            "asgd19b" => aset('19'),
            "namegd20" => Gedung::find(24),
            "asgd20" => aset('20'),
            "namegd21" => Gedung::find(25),
            "asgd21" => aset('21'),
            "namegd22" => Gedung::find(26),
            "asgd22" => aset('22'),
            "namegd23" => Gedung::find(27),
            "asgd23" => aset('23'),
            "namegd24" => Gedung::find(28),
            "asgd24" => aset('24'),
            "namegd25" => Gedung::find(29),
            "asgd25" => aset('25'),
        ]);
        
    }

    // public function getdataaset($tipe,$gedung)
    // {
    //     $res = Http::get(config('app.URL_API').$tipe,[
    //         'APIKEY'=>config('app.API_KEY'), 
    //         'kodegedung'=>$gedung, 
    //     ]); 
    //     $json=$res->json(); 
    //     return $json['data'];
    // }
}
