<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotaController extends Controller
{
    //
    function getMain()
    {
        return view('pages/landing');
    }
    function getAcerca()
    {
        return view('pages/acercaDe');
    }
    function getKnowledge()
    {
        return view('pages/knowledge');
    }

    function getwork()
    {
        return view('pages/work');
    }
    function getContacto()
    {
        return view('pages/contacto');
    }
}
