<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spending;
use App\Category;

class RegisterController extends Controller
{
    public function register(Spending $spending, Category $category)
    {
        return view('spendings/register'); 
        return view('spendings/register')->with(['spendings' => $spending->get(), 'categories' => $category->get()]);
    }
}
