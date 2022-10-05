<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spending;
use App\Category;

class RegisterController extends Controller
{
    public function view()
    {
        return view('spendings/register');
    }
    
    public function register(Request $request, Spending $spending)
    {
        $input = $request['spending'];
        $spending->fill($input)->save();
        return redirect('/spendings/top');
    }
}
