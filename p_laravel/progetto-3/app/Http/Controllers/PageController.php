<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $array = [
        ['name'=>'prodotto-1','info'=>'info prodotto-1','img'=>'img-1'],
        ['name'=>'prodotto-2','info'=>'info prodotto-2','img'=>'img-2'],
        ['name'=>'prodotto-3','info'=>'info prodotto-3','img'=>'img-3'],
        ['name'=>'prodotto-4','info'=>'info prodotto-4','img'=>'img-4'],
    ];

    public static $flights = [
        "departure" => [
            [
                "id" => 29,
                "city" => "Parigi",
                "time" => "15:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 350,
                    "occupied" => 350,
                ],
                "cover" => "<https://picsum.photos/600/400>",
            ],
            [
                "id" => 11,
                "city" => "Lourdes",
                "time" => "11:30",
                "company" => "Jesus Airlines",
                "gate" => 13,
                "seats" => [
                    "total" => 156,
                    "occupied" => 150,
                ],
                "cover" => "<https://picsum.photos/600/400>",
            ],
            [
                "id" => 45,
                "city" => "Francoforte",
                "time" => "19:30",
                "company" => "RyanAir",
                "gate" => 17,
                "seats" => [
                    "total" => 190,
                    "occupied" => 145,
                ],
                "cover" => "<https://picsum.photos/600/400>",
            ],
        ],
        "arrival" => [
            [
                "id" => 56,
                "city" => "Rotterdam",
                "time" => "11:30",
                "company" => "Norwegian",
                "gate" => 1,
                "cover" => "<https://picsum.photos/600/400>",
            ],
            [
                "id" => 78,
                "city" => "Dublino",
                "time" => "15:30",
                "company" => "EasyJet",
                "gate" => 3,
                "cover" => "<https://picsum.photos/600/400>",
            ],
            [
                "id" => 101,
                "city" => "Parigi",
                "time" => "19:30",
                "company" => "Air France",
                "gate" => 3,
                "cover" => "<https://picsum.photos/600/400>",
            ],
        ],
    ];

    
    public function homepage(){

        $f_departure = self::$flights['arrival'];
        $f_arrival = self::$flights['departure'];
        
        return view('homepage',['fdeparture'=>$f_departure],['farrival'=>$f_arrival]);
    }
    
    public function main(){
        
        return view('main', ['elementi'=>self::$array]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    
    public function detail($product){
        foreach(self::$array as $key => $prodotto){
            if($product === $prodotto['name']){
                return view('detail',['elemento'=>$prodotto]);
            }
        }
    }

    public function info($ref){

        $f_departure = self::$flights['departure'];

        foreach ($f_departure as $singolovolo){
            if($ref === $singolovolo['id']){
                return view('info',['singleflight'=>$singolovolo]);
            }
        }
    }
}
