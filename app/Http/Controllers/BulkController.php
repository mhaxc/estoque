<?php

namespace App\Http\Controllers;

use App\Models\bulk;
use Illuminate\Http\Request;

class BulkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return('bulks');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bulk $bulk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bulk $bulk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bulk $bulk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bulk $bulk)
    {
        //
    }
}
