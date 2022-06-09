<?php

namespace App\Http\Controllers;

use App\Http\Resources\tableListCollection;
use App\Http\Resources\tableListResource;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {

        return view('dashboard', [
            'jsonlist' => \App\Models\TableList::default()->get()
        ]);
    }
    public function generate()
    {
        return view('generate');
    }
    public function test()
    {
        return new tableListCollection(\App\Models\TableList::default()->paginate(5));
    }
}
