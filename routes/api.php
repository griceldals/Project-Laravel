<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/students', [studentController::class, 'index']); {
    return 'student list';
};

Route::post('/students', function () {
    return 'post student';
});

Route::put('/students/{id}', function () {
    return 'update student';
});

Route::delete('/students', function () {
    return 'delete student';
});