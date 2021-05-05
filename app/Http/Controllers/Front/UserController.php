<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showAdminName()
    {
        return "SAAD MAJID";
    }
    public function getFront()
    {
        return view('welcome');
    }
}
