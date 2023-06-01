<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $nome = "Sofia";
        $idade = 20;
        $arr = [1, 2, 3, 4, 5];
        $nomes = ["sofia", "sofi", "so", "sof", "so"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function contact()
    {
        return view('events.contact');
    }

    public function product()
    {
        return view('events.product');
    }
}
