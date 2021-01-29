<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        return ['id' => $request->get('id')];
    }

    public function store(Request $request)
    {
        return ['data' => $request->all()];
    }
}
