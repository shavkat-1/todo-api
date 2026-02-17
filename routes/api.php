<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index']);
    Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store']);
    Route::get('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'show']);
    Route::put('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'update']);
    Route::delete('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'destroy']);
});

?>
