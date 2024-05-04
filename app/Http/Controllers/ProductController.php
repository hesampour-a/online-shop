<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filters = request()->only('search', 'min_price', 'max_price', 'category', 'brand');

        return view('product.index', ['products' => Product::with(['product_image', 'category'])->filter($filters)->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', ['categories' => Category::all(), 'brands' => ProductBrand::all()]);
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

        return redirect()->route('product.show', ['product' => $product->load('product_image', 'product_brand', 'category', 'category.product'), 'properties' => json_decode($product->description), 'colors' => json_decode($product->colors)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view(
            'product.show',
            [
                'product' => $product->load(
                    'product_image',
                    'product_brand',
                    'category',
                    'category.product'
                ),
                'properties' => json_decode($product->description),
                'colors' => json_decode($product->colors)
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
