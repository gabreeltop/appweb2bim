<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view("initial/inicial");
    }
    public function creators()
    {
        return view("initial/creators");
    }
    public function project()
    {
        return view("initial/project");
    }
}
