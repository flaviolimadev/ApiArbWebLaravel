<?php

namespace App\Http\Controllers;

use App\Models\Sure;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function home(){

        return view('apresentacao', [
            'operacoes' => Sure::all(),
        ]);
    }
}
