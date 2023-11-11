<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContatoController extends Controller
{
    public function contato(): View {
        return view('site.contato');
    }
}
