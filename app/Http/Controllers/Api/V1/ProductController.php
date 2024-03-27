<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\V1\ProductResource;
use App\Services\V1\ProductQuery;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $productQuery;

    public function __construct(ProductQuery $productQuery)
    {
        $this->productQuery = $productQuery;
    }

    public function index(Request $request)
    {
        $queryItems = $this->productQuery->transform($request);

        if (empty($queryItems)) {
            return Product::all();
        } else {
            // Check if the 'category' parameter exists in the $queryItems array
            if (isset($queryItems['categoryId'])) {
                // If category parameter exists, filter products by category_id
                return Product::where('category_id', $queryItems['categoryId'])->get();
            } else {
                // Return an empty result if category parameter is not provided
                return [];
            }
        }
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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
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
    public function update(UpdateProductRequest $request, Product $product)
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
