<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Film;

class HomeController extends BaseController
{
    public function index()
    {
        $context = ['films' => Film::all()];
        return view('index', $context);
    }

    public function detail(Film $film)
    {
        $context = ['film' => $film];
        return view('detail', $context);
    }
}
