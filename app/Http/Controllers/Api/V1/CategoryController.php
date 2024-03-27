<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\V1\CategoryQuery;

class CategoryController extends Controller
{
    protected $categoryQuery;

    public function __construct(CategoryQuery $categoryQuery)
    {
        $this->categoryQuery = $categoryQuery;
    }

    public function index()
    {
        $categories = $this->categoryQuery->getAllCategories();

        return response()->json(['categories' => $categories], 200);
    }
}
