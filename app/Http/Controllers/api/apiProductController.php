<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class apiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductResource::collection(Product::with(['product_brand', 'product_image', 'category'])->latest()->get());
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
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:100',
            'fa_title' => 'required|string|min:2|max:100',
            'garanty' => 'required',
            'product_brand_id' => 'required',
            'category_id' => 'required',
            'price' => 'required|min:1000|numeric',
            'count' => 'required|min:1|numeric',
            'long_description' => 'required|string',

        ]);



        $product = Product::create([
            'description' => json_encode($request->description),
            'sizes' => json_encode($request->sizes),
            'colors' => json_encode($request->colors),

            ...$validatedData

        ]);
        $files = $request->file('images');
        foreach ($files as $file) {
            $path = $file->store('product images', 'public');
            $product->product_image()->create(['img_path' => $path]);
        }
        //$product->eagerLoadRelations(['product_brand', 'product_image', 'category']);
        return new ProductResource($product->load(['product_brand', 'product_image', 'category']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product->load(['product_brand', 'product_image', 'category']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
