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
                ->whereMonth('created_at', date('m'))
                ->get();
        
        return view('spendings/top')->with(['spendings'=>$data]);
    }
}
