<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('site.portfolio.index');
    }
    public function show()
    {
        return view('site.portfolio.show');
    }
}
