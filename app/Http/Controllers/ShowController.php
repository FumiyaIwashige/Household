<?php

namespace App\Http\Controllers;

use App\Spending;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function index(Category $category, Spending $spending)
    {
        return view('index')->with(['spendings' => $spending->get(), 'categories' => $category->get()]);
    }
    
    /**
    public function show_edit(Request $request)
    {
        return view('spendings/show')->with(['spending_inf' => $request]);
    }
    **/
    public function show_edit(Spending $spending, Request $request)
    {
         return view('spendings/show')->with(['spending_inf' => $spending, 'date' => $request]);
    }
    
    public function update(Request $request, Spending $spending)
    {
        $input_spending = $request['spending'];
        $spending->fill($input_spending)->save();
        /**
        $from = $request
        **/
        $data = DB::table('spendings')
                ->whereBetween('updated_at', [$request['from'], $request['until']])
                ->get();
        dd($data);
        
        return redirect('/spendings/edit')->with(['date' => $request['date']]);
    }
}