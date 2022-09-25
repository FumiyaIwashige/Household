<?php

namespace App\Http\Controllers;

use App\Spending;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Spending $spending)
    {
        return $spending->get();
    }
}
