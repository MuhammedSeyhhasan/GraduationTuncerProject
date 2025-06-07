<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $numProducts = Product::count();
        
        /// تمرير المتغير إلى View
        return view('admin.dashboard', ['productCount' => $numProducts]);

    }
}   
