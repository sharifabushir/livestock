<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Farmer;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anim = Animal::all();
        
        $animals = [];

        if ($anim) {
            
            foreach ($anim as $key => $value) {
                $animals[$key]['id'] = $value->id;
                $animals[$key]['farmer_name'] = Farmer::find($value->farmer_id)->farmer_name;
                $animals[$key]['type'] = $value->animal_type;
                $animals[$key]['species'] = $value->species;
                $animals[$key]['date_of_birth'] = $value->date_of_birth;
                $animals[$key]['weight'] = $value->weight;
            }
        }

        // dd($anim);

        return view('livestock.Views.animalrep')->with(['animals' =>$animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
