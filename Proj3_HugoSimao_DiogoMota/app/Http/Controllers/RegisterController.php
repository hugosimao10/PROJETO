<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    // $results = DB::select('select * from users where id = ?', [1]);

    public function listEstado()
    {
        $estado = DB::table('estadoservico')->get();

        return view('listaestados', ['estados' => $estado]);
    }
}
