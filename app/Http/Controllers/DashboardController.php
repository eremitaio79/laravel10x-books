<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('auth');

    //     // Neste exemplo o middleware só seria aplicado ao método index deste controller.
    //     // $this->middleware('auth')->only('index');
    //     // $this->middleware('auth')->only(['index', 'create', 'edit']);

    //     // Neste exemplo o middleware é aplicado a todos os métodos, exceto ao index e create.
    //     // $this->middleware('auth')->except(['index', 'create']);


    // }

    public function index()
    {
        return view('admin.dashboard');
    }
}
