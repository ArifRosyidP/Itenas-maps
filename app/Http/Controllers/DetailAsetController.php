<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailAsetController extends Controller
{
    public function getdataaset($nama,$gedung){
        $res = Http::get(config('app.URL_API').'aset-by-kodegedung',[
            'APIKEY'=>config('app.API_KEY'), 
            'kodegedung'=>$gedung, 
        ]); 
        $json=$res->json();
        

        return view('part/astable', [
            "title" => "Detail Aset Gedung",
            "namaged"   => $nama,
            "noged"   => $gedung,
            "detailAset" => $json["data"]
            
        ]);
    
    }

    // public function search($nama,$gedung,$obj)
    // {
    //     dd(request($obj));
    //     $res = Http::get(config('app.URL_API').'aset-by-kodegedung',[
    //         'APIKEY'=>config('app.API_KEY'), 
    //         'kodegedung'=>$gedung,
    //     ]); 
    //     $json=$res->json();
        

    //     return view('part/astable', [
    //         "title" => "Detail Aset Gedung",
    //         "namaged"   => $nama,
    //         "noged"   => $gedung,
    //         "detailAset" => $json["data"]->where("nama_golongan", "like", "%".$obj."%")->get()
            
    //     ]);
    // }
}
