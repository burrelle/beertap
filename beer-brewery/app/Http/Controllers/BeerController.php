<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Get all beers
     *
     * @return void
     */
    public function index()
    {
        return Beer::all();
    }

    /**
     * Store a new beer to database
     *
     * @param Request $request
     * @return JSON created
     */
    public function store(Request $request)
    {
        $beer = Beer::create([
            'name' => $request->name,
            'price' => $request->price,
            'abv' => $request->abv,
            'ibu' => $request->ibu,
            'brewery_id' => $request->brewery_id,
        ]);

        return response()->json($beer, 201);
    }
}
