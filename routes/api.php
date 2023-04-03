<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Resident;
use App\Models\Staff;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD USING ELOQUENT

// CREATE
Route::post('resident/create', function(Request $request) {
    $residents = new Resident;
    //$course->name = $request->name;
    //$course->is_draft = $request->is_draft;
    $residents->fill($request->all());
    $residents->save();

    return $residents;
});
// READ
Route::get('resident', function() {
    $residents = Resident::with('staffs')->get();
    return $residents;
});

// UPDATE
Route::put('/resident/{id}', function(Request $request, $id){
$residents = Resident::find($id);
$residents->fname = 'Lei';
$residents->lname = 'Seneres';
$residents->save();
return $residents;

});
//DELETE
Route::delete('/resident/{id}', function(Request $request, $id){
    $residents = Resident::find($id);
    $residents->delete();
    return $residents;
    
    });



