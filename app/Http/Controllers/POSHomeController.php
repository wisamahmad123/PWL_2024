<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSHomeController extends Controller
{
    public function index() {
        return view('blog.home');
    }
}
