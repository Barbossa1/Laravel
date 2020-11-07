<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $objCategory = new Categories();
        $categories = $objCategory->getAllCategories();
        return view('categories.index', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $objCategory = new Categories();
        $categories = $objCategory->getCategoriesByID($id);

        return view('categories.show', ['categories' => $categories]);
    }
}
