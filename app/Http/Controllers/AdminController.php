<?php

namespace App\Http\Controllers;

use App\User;
use App\Cart;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();
        $admis = Admin::count();
        $cart = Cart::count();
        $carts = Cart::latest()
                ->get();

        return view('admin.admin',compact('users','admis','cart','carts'));
    
    }

    public function create()
    {
        return view('admin.auth.admin-register');
    }
      public function update()
    {
        // $this->authorize('update');
        // dd(request()->all());
       $this->validate(request(),[
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
       ]);
        $req = request(['name','email','password']);
        $req['password'] = bcrypt('password');
       // dd($req);
       $admin = Admin::create($req);
       // auth()->login($admin);
       return redirect('/admin');
    }
}