<?php

namespace App\Http\Controllers;

use App\Brewery;
use Illuminate\Http\Request;


class BreweryController extends Controller
{
    /**
     * All breweries
     *
     * @return void
     */
    public function index()
    {
        return Brewery::all();
    }

    /**
     * Store a new brewery to database
     *
     * @param Request $request
     * @return JSON created
     */
    public function store(Request $request)
    {
        $brewery = Brewery::create([
            'name' => $request->name,
            'city' => $request->city,
            'state' => $request->state
        ]);

        return response()->json($brewery, 201);
    }

    /**
     * Show a specific brewery
     *
     * @param Integer $id
     * @return void
     */
    public function show($id)
    {
        return Brewery::find($id);
    }
}
