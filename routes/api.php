<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\UserController;
use App\Models\Propertie;
use App\Models\User;
use App\Models\Images;
use App\Models\Information;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('images/{id}',function($id){
    return Images::find($id);
});

// crud para info forms
Route::get('information',function(){
    return Information::all();
});

Route::post('information',function (Request $request){
    $valid = Information::create($request-> all());
    return response()->json($valid);
});

Route::delete('information/{id}', function($id){

    $encontrar = Information::find($id);
    if($encontrar != null){
        Information::find($id)->delete();
        return response()->json([
            'code' => '200',
            'message' => "Successfully delete",
            'success' => true
        ], 200);
    }

    return response()->json([
        'code' => '100',
        'message' => "Information no delete",
        'success' => true
    ], 200);
});



// crud para usuarios
Route::get('user',function(){
    return User::all();
});

Route::get('user/{id}',function($id){
    return User::find($id);
});

Route::get('username/{username}', [UserController::class, 'busqueda']);

Route::post('user',function (Request $request){
    $valid = User::create($request-> all());
    return response()->json($valid);
});

Route::put('user/{id}', function(Request $request, $id){
    $propertie = User::findOrFail($id);
    $propertie->update($request->all());
    return $propertie;
});

Route::delete('user/{id}', function($id){

    $encontrar = User::find($id);
    if($encontrar != null){
        User::find($id)->delete();
        return response()->json([
            'code' => '200',
            'message' => "Successfully user deleted",
            'success' => true
        ], 200);
    }

    return response()->json([
        'code' => '100',
        'message' => "User not deleted",
        'success' => true
    ], 200);
});



// Crud para propiedades
Route::get('properties',function(){
    return Propertie::all();
});

Route::get('properties/{id}',function($id){
    return Propertie::find($id);
});

Route::post('properties',function (Request $request){
    $valid = Propertie::create($request-> all());
    return response()->json($valid);
});

Route::put('properties/{id}', function(Request $request, $id){
    $propertie = Propertie::findOrFail($id);
    $propertie->update($request->all());
    return $propertie;
});

Route::delete('properties/{id}', function($id){

    $encontrar = Propertie::find($id);
    if($encontrar != null){
        Propertie::find($id)->delete();
        return response()->json([
            'code' => '200',
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    return response()->json([
        'code' => '100',
        'message' => "Propertie dont deleted",
        'success' => true
    ], 200);
});

