<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class api_controller extends Controller
{
    //

    public function add(){
        return product::create(
            [
                'tittle' => request('tittle'),
                'description' => request('description'),
                'vendor' => request('vendor'),

            ]
        );
    }

    public function show(){
        return product::all();
    }
        
}
