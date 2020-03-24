<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return CategoryResource::collection(Category::all());
    }
}
