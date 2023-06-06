<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function busqueda(string $id){
        $users =  User::where('username',$id)->get();
        if($users->isEmpty()){
            return response()->json([
                'code' => '200',
                'message' => "Usuario no existe",
                'success' => true
            ], 200);
        }else{
            return $users;
        }


    }
}
