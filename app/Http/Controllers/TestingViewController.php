<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingViewController extends Controller
{
    public function index() {
        return [
        'name' => 'John Doe',
        ];
    }   
}
