<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Farmer;


class FarmerController extends Controller
{
    public $successStatus = 200;

    public function __construct(){

        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farm = Farmer::all();
        return response()->json(['message'=>'farmer has been fetched successfully','farmers' => $farm],$this->successStatus);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('livestock.add.farmer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:30',
            'phone' => 'required|string|max:15',
            'location' => 'required|string|max:60',
            'email' => 'required|string|email|max:90|unique:users',
            'username' => 'required|string|max:50',
            'gender' => 'required|string|max:10',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            $farm = new Farmer();

            $farm->farmer_name = $request->name;
            $farm->farmer_gender = $request->gender;
            $farm->farmer_phone  = $request->phone;
            $farm->farmer_location = $request->location;
            $farm->farmer_email = $request->email;
            $farm->user_id = $user->id;

            if ($farm->save()) {
                return response()->json(['message'=>'farmer has been registered successfully'],$this->successStatus);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        //
    }
}
