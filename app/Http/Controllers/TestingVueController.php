<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingVueController extends Controller
{
    public function index()
    {
        return [
            'name' => 'Another Name',
        ];
    }
}
