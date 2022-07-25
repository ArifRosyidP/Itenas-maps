<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailAsetController extends Controller
{
    public function getdataaset($nama,$gedung){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://api.itenas.ac.id:8080/aset-by-kodegedung?APIKEY=284a13407bb5660a4b725312af37b814186056c2&kodegedung={$gedung}");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        $output = json_decode($output, true);

        isset($output["data"]);
        
        $output = isset($output["data"]) ? ($output["data"]) : null;

        
        // $res = Http::get(config('app.URL_API').'aset-by-kodegedung',[
        //     'APIKEY'=>config('app.API_KEY'), 
        //     'kodegedung'=>$gedung, 
        // ]); 
        // $json=$res->json();
        

        return view('part/astable', [
            "title" => "Detail Aset Gedung",
            "namaged"   => $nama,
            "noged"   => $gedung,
            "detailAset" => $output,
    
        ]);
    
    }

}
