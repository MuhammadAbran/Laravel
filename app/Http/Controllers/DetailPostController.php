<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPostController extends Controller
{
    public function index($id)
    {
        return view('detailPost', compact('id'));
    }
}
