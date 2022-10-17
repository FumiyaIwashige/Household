<?php

namespace App\Http\Controllers;

use App\Spending;
use App\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Category $category, Spending $spending)
    {
        return view('index')->with(['spendings' => $spending->get(), 'categories' => $category->get()]);
    }
    
    public function show(Spending $spending)
    {
        return view('spendings/show')->with(['spendings' => $spending->get()]);
    }
    
    public function show_edit(Request $request)
    {
        return view('spendings/show')->with(['spending_inf' => $request]);
    }
    
}