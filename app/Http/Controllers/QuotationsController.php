<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationsController extends Controller
{
   
    public function create()
    {
        return view('quotations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
}