<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('site.career.index');
    }

    public function show()
    {
        return view('site.career.show');
    }
    public function create()
    {
        return view('site.career.create');
    }
}
