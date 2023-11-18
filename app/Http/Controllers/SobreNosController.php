<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SobreNosController extends Controller
{
    public function sobrenos(): View {
        return view('site.sobre-nos');
    }
}
