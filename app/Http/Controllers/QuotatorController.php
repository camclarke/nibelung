<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotatorController extends Controller
{
    public function index($quote_id)
    {
        //dd($quote_id);
        return view('quotator');
    }
}
