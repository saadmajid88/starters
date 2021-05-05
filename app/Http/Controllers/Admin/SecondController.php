<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //
   /* public function __construct(){
        $this -> middleware('auth') ->except('secondShow');
    }*/
    public function  firstShow(): string
    {
     return 'Controller First Show';
    }

    public function  secondShow(): string
    {
        return 'Controller Second Show';
    }

    public function  getAdmin()
    {
        return 'Page Admin';
    }

    public function  showAdminName()
    {
        return 'Page Name Admin';
    }
}
