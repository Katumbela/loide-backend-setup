<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PropinaController;
use App\Http\Controllers\UserController;
use App\Models\Curso;
use App\Models\Matricula;

Route::post("register", [ApiController::class, "register"]);
Route::post("login", [ApiController::class, "login"]);

Route::group([
    "middleware" => ["auth:api"]
], function () {

    Route::get("profile", [ApiController::class, "profile"]);
    Route::get("refresh", [ApiController::class, "refreshToken"]);
    Route::get("logout", [ApiController::class, "logout"]);
    // Route::get('list-articles', [UserController::class, 'index']);
    // Route::post('add-articles', [UserController::class, 'addArticle']);


    /*  
    Route::post('users', [UserController::class, 'store']);
    Route::get('users/{user}', [UserController::class, 'show']);
    Route::delete('users/{user}', [UserController::class, 'destroy']);
    Route::put('users/{user}', [UserController::class, 'update']); */
    Route::apiResource('users', UserController::class);
    Route::apiResource('aluno', AlunoController::class);
    Route::apiResource('matricula', MatriculaController::class);
    Route::apiResource('curso', CursoController::class);
    Route::apiResource('propina', PropinaController::class);
    #Route::put('curso', [CursoController::class, 'update']);
});