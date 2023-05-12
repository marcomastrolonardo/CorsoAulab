<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller{
    public function home(){
        $array2 = [
            'forza',
            'tenacia',
            'sacrificio',
            'passione'
        ];
        return view('home',['homeEl'=>$array2]);
    }

    public function azienda(){
        return view('chisiamo');
    }

    public function destinazioni($destinazione){
        
        $destinazioni = [
            /*
            ['name'=>'Roma','image'=>''],
            ['name'=>'Milano','image'=>''], 
            ['name'=>'Bari','image'=>''], 
            ['name'=>'Amsterdam','image'=>''], 
            ['name'=>'Napoli','image'=>''], 
            ['name'=>'Praga','image'=>''], 
            */
            'Roma',
            'Milano', 
            'Bari', 
            'Amsterdam', 
            'Napoli', 
            'Praga'
        ];
            
        foreach($destinazioni as $elemento){
            if($destinazione === $elemento){
                return view('destinazione',['destination'=>$destinazione]);
            }
        }
    }

    public function destinazione(){
        
        $destinazioni = [
            'Roma', 
            'Milano', 
            'Bari', 
            'Amsterdam', 
            'Napoli', 
            'Praga'
        ];

        return view('destinazioni',['elementi'=>$destinazioni]);
    }

    public function contatti(){
        return view('contatti');
    }

}
    

