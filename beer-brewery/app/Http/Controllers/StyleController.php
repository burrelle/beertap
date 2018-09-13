<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;

class StyleController extends Controller
{
    /**
     * Get all beers
     *
     * @return void
     */
    public function index()
    {
        return Style::all();
    }
}
