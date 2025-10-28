<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('other_basics.about');
    }
    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return view('other_basics.contact');
    }
}
