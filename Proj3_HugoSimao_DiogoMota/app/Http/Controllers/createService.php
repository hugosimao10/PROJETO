<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // $results = DB::select('select * from users where id = ?', [1]);

    public function createService()
    {
        $createService = DB::insert('insert into servico (id, name) values (?, ?)', [1, 'Dayle']);
        return view('createService', ['create' => $createService]);
    }
}
