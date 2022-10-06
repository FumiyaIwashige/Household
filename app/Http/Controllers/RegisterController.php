<?php

namespace App\Http\Controllers;
use App\Http\Requests\SpendingRequest;
use App\Spending;
use App\Category;

class RegisterController extends Controller
{
    public function view()
    {
        return view('spendings/register');
    }
    
    public function register(SpendingRequest $request, Spending $spending)
    {
        $input = $request['spending'];
        $spending->fill($input)->save();
        return redirect('/spendings/register');
    }
}
