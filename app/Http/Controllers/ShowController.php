<?php

namespace App\Http\Controllers;

use App\Spending;
use App\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Category $category, Spending $spending)
    {
        return view('index')->with(['categories' => $category->get()]);
        return view('index')->with(['spendings' => $spending->get()]);
    }
}