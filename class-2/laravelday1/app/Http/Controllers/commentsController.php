<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return comments::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return comments::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return comments::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $currentcomment=comments::find($id);
       return  $currentcomment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return comments::destroy($id);
    }
}
