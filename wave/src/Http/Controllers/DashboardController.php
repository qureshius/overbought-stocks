<?php

namespace Wave\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DashboardController extends \App\Http\Controllers\Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('theme::dashboard.index',compact('products'));
    }
}
