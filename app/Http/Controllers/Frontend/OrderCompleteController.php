<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderCompleteController extends Controller
{
    public function index()
    {
        return view('Frontend.shop_order_complete');
    }
}
