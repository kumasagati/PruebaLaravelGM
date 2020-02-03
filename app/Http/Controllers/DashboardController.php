<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $cantidad_clasificaciones = DB::table("categories")->count();
        $cantidad_medicamentos = DB::table("medicines")->count();
        $cantidad_usuarios = DB::table("users")->count();
        return view("Dashboard/dashboard", compact("cantidad_clasificaciones", "cantidad_medicamentos", "cantidad_usuarios"));
    }
}
