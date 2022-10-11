<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function expenses()
    {
        return view('pages.expenses');
    }
}
