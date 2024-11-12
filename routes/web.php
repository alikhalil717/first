<?php
use App\Http\Controllers\dashboardcontroller ;
use App\Http\Controllers\profilecontroller ;

use Illuminate\Support\Facades\Route;


Route ::get('/',[dashboardcontroller::class,'index']) ;

Route ::get('/profile',[profilecontroller::class,'index']) ;







    