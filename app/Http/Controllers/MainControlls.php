<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class MainControlls extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tirList()
    {
        $tirList = new Book();
        return view('tirList', ['tirList' => $tirList->all()]);
    }

}
