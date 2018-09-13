<?php

namespace App\Http\Controllers;

use App\Glass;
use Illuminate\Http\Request;


class GlassController extends Controller
{
    public function index()
    {
        return Glass::all();
    }
}
