<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.sign_in');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate ([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request)) {
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors(['msg' => 'The provided credentials do not match our records.']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.sign_up');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => $request->password
        ]);

        return redirect()->route('sign_in');
    }

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
}
