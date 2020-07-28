<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Farmer;
use App\Complain;
use App\Veterinarian;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp = Complain::all();

        $complains = [];

        if ($comp) {
            foreach ($comp as $key => $value) {
                $complains[$key]['id'] = $value->id;
                $complains[$key]['farmer_name'] = Farmer::find($value->farmer_id)->farmer_name;
                $complains[$key]['animal_type'] = Animal::find($value->animal_id)->animal_type;
                $complains[$key]['veterinarian_name'] = Veterinarian::find($value->veterinarian_id)->veterinarian_name;
                $complains[$key]['title'] = $value->title;
                $complains[$key]['status'] = $value->status;
            }
        }


        return view('livestock.Views.view_comp')->with (['complains' => $complains]);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
    }
}
