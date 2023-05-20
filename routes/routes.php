<?php

use HTTP\Route;
use Calamo\Controllers\HomeController;
use Calamo\Controllers\GameController;

Route::get('/', [HomeController::class, 'index']);
Route::get('contacto', [HomeController::class, 'contacto']);
Route::get('catalogo', [GameController::class, 'index']);