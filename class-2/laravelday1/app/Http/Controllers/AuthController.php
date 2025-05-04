<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $Validate=Validator::make($request->all(),[
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:users,email',
            'password'=> 'required|string|min:8',
        ]);

        //validation
        if ($Validate->fails()){
            $Errors=$Validate->errors();
        
        if($Errors->has('email')) return 'The email and password didnt match';
        else return 'validation error';
        }

        //register user

        return User::create($request->all());
}

    public function login(Request $request){
        $Validate=Validator::make($request->all(),[
            'email'   => 'required|email',
            'password'=> 'required|min:8',
        ]);

        //validation

        if($Validate->fails()){
            return 'validation error';
        }

        $User=User::where('email',$request->email)->first();
        if(!$User||!Hash::check($request->password,$User->password)){
            return 'Email and password didnt matched';
        }

        //create token
        $token=$User->createToken('user')->plainTextToken;
        return [
            'success' =>true,
            'token'   =>$token,
        ];

    }

    //logout
    public function logout (Request $request, $id) {
        $request->user()->tokens()->delete();
        return 'logout successfully!';
    }

}
