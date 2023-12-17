<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //este controlador retorna la vista dashboard(panel de control), ahí se hará
    //los procedimientos CRUD.
    public function index(){
       // return view('dashboard');
       return view('dashboard');
    }
}
