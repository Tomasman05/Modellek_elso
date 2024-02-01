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
    public function updateDrink(Request $request){
        $drink = Drink::find($request["id"]);
        $drink->drink= $request["drink"];
        $drink->amount=$request["amount"];
        $drink->save();
        return "ok";
    }
    public function deleteDrink(Request $request){
        $drink = Drink::find($request["id"])->delete();
        return $drink;
    }
    public function getDrinksWithType(){
        
    }
}
