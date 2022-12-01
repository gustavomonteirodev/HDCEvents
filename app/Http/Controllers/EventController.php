<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $name = 'Gustavo';
        $age = 26;
        $arr = [10,20,30,40,50];
        $names = ['Matheus', 'Maria', 'João', 'Saulo'];
        $smartphone = 'iphone';

        return view('welcome',
        [
            'name' => $name,
            'age' => $age,
            'occupation' => 'programador',
            'arr' => $arr,
            'names' => $names,
            'smartphone' => $smartphone
        ]);
    }

    public function create () {
        return view('events.create');
    }

}
