<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Spending;


class GetDataController extends Controller
{
    public function getdata()
    {
        $data = DB::table('spendings')
                ->whereMonth('updated_at', date('m'))
                ->get();
        
        return view('spendings/top')->with(['spendings'=>$data]);
    }
    
    public function pastdata(Request $request, Spending $spending)
    {
        /*
        $request['from'], $request['until']
        */
        
        $data = DB::table('spendings')
                ->whereBetween('updated_at', [$request['from'], $request['until']])
                ->get();
                
        return view('spendings/past')->with(['spendings' => $data, 'date' => $request]);
    }
    
    public function edit_data(Request $request, Spending $spending)
    {
        $data = DB::table('spendings')
                ->whereBetween('updated_at', [$request['from'], $request['until']])
                ->get();
        /*
        dd($request["from"]);
        */
        
        return view('spendings/edit')->with(['spendings' => $data, 'date' => $request]);
    }
    
    public function item(Request $request, Spending $spending)
    {
        $data = DB::table('spendings')
                ->where('category_id', '=', $request)
                ->get();
                
        return view('/spendings/category')->with(['data' => $data, 'category_id' => $request, 'spendings' => $spending]);
    }
    
}
