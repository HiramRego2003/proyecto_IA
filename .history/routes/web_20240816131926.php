<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrganizationController;



Route::get('/', function(){ return view('index');});
