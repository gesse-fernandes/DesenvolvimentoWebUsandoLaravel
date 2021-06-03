<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Curso;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::Paginate(2);
        return view('home', compact('cursos'));
    }
}
