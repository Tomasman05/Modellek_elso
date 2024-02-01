<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function getDrinks(){
        $drinks = Drink::all();
        return $drinks;
    }
    public function getOneDrink(){
        $drink= Drink::where("drink","Dab")->first();
        return $drink;
    }
    public function getByName($value){
        $drink= Drink::where("drink",$value)->first();
        return $drink;
    }
    public function updateDrink(){
        $drink = Drink::find(4);
        $drink->amount= 93;
        $drink->save();
        return "ok";
    }
}
