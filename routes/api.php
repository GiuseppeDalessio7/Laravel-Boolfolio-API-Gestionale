<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::middleware(HandleCors::class)->group(function () {
    Route::get('projects', [ProjectController::class, 'index']);
});

// Route::get('projects/latest', function () {
//     $projects = Project::with('type', 'technologies')->OrderbyDesc('id')->take(3)->get();
//     return response()->json([
//         'status' => 'success',
//         'result' => $projects
//     ]);
// });
