<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return products::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        products::create($request->all());
        return 'product added';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      return   products::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $currentproduct=products::find($id);
        $currentproduct->update($request->all());
        return $currentproduct;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        products::destroy($id);
        return 'deleted successfully';
    }
}
