<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;


use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
   

        
            function index(){
              
                $currentDate = Carbon::now()->format('Y-m-d');         
                $trainsToday = Train::where("orario_partenza", $currentDate)->get();
                
        
                return view("index", compact("trainsToday","currentDate"));
            }
        
    
}
