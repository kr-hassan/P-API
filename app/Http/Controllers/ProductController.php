<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_products = Product::all();
        return $all_products;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required| string',
            'description' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'price' => $request->price,
        ];

        return Product::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required| string',
            'description' => 'required',
            'slug' => 'required',
            'price' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'price' => $request->price,
        ];
        $product = Product::find($id);
        return Product::Update($data);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
