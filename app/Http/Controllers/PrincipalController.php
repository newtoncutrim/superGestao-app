<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PrincipalController extends Controller
{
    public function principal(): View{
        return view('site.principal');
    }
}
