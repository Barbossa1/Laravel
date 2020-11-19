<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::paginate(3);
        return view('categories.index', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $category = Categories::find($id);
        if (!$category) {
            return abort(404);
        }

        $newsList = $category->news()->paginate(1);
        return view('categories.show', ['newsList' => $newsList]);
    }
}
