<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Account_OrdersController extends Controller
{
    public function index()
    {

    return view('Frontend.account_orders');
    }}
