<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
public function index(){

$users=[ ['name'=>'alex','age'=>30  ] , ['name'=>'jhon' ,'age'=>17] ,['name'=>'ali' ,  'age'=>19  ]  ] ;

return  view ('dashboard',['userslist'=>$users  ]) ;

}


} 
