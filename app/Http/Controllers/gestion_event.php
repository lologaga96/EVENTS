<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evenement;
use Illuminate\Support\Facades\Validator;
class gestion_event extends Controller
{
    public function home(){
        return view("formulaire");
    }
    public function save(Request $request){
        $request->validate([
            'nom'=>"required|max:50|min:3",
            'date_demarrage'=>"required|date",
            'date_fin'=>"required|date",
            'description'=>"required|max:255",
        ]);
       
        evenement::create([
            "nom"=>$request->nom,
            "date_demarrage"=>date($request->date_demarrage),
            "date_fin"=>date($request->date_fin),
            "description"=>$request->description,
        ]);
        return redirect("/")->with('success','Votre évènement est enrégister avec succès');

    }

    public function vue(){
        $eventss=new evenement();
        $events=$eventss->all();
       
        return view("event",compact("events"));
    }
}
