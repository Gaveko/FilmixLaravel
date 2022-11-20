<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AdminAuthController extends BaseController
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login()
    {
        
    }
}