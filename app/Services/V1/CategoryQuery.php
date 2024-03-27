<?php

namespace App\Services\V1;

use App\Models\Category;

class CategoryQuery
{
    public function getAllCategories()
    {
        return Category::all();
    }
}
