<?php

namespace App\Http\Controllers\API\V1;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $successStatus = 200;

    public function __construct(){

        $this->middleware('auth:api', ['except'=>['login','register']]);
    }

    public function register(Request  $request){
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email|unique:users',
        ]
        );



        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()], 401);
        } else {
            $user = new User();
            $user->name = $request['name'];
            $user->password = Hash::make($request['password']);
            $user->email = $request['email'];
            if ($user->save()) {
                return response()->json(['sucess' =>true, 'message' => 'registration succeffuly'],$this->successStatus);
            } else {
                return response()->json(['error' =>true, 'message' => 'something went wrong try again leter'],500);
            }
            
        }
        

    }



    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])) 
        {
            $user = Auth::user();
            $userdata['access_token'] = $user->createToken('auth_token')->accessToken;
            $userdata['user'] = $user;

            return response()->json(['userdata' =>$userdata, 'message' => 'authentication was made successfully'],$this->successStatus);
        } else {
            return response()->json([ 'message' => 'email or password is incorrectly'],401);       
        }
        
    }
}
