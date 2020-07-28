<?php

namespace App\Http\Controllers\API\V1;


use App\User;
use App\Veterinarian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class VeterinarianController extends Controller
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
        $vet = Veterinarian::all();

        return response()->json(['message'=>'veterianarian has been fetched successfully','veterinarians' => $vet],$this->successStatus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('livestock.add.Reg_vet');
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
            $vet = new Veterinarian();

            $vet->veterinarian_name = $request->name;
            $vet->veterinarian_gender = $request->gender;
            $vet->veterinarian_phone = $request->phone;
            $vet->veterinarian_address = $request->location;
            $vet->veterinarian_email = $request->email;
            $vet->veterinarian_image = 'empty';
            $vet->veterinarian_status = 'offline';
            $vet->user_id = $user->id;

            if ($vet->save()) {
                return response()->json(['message'=>'veterinarian has been registered successfully'],$this->successStatus);
            }
        }

        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Veterinarian  $veterinarian
     * @return \Illuminate\Http\Response
     */
    public function show(Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veterinarian  $veterinarian
     * @return \Illuminate\Http\Response
     */
    public function edit(Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veterinarian  $veterinarian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veterinarian $veterinarian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veterinarian  $veterinarian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veterinarian $veterinarian)
    {
        //
    }
}
