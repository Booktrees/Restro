<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use App\Category;
use App\Order;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Category $category)
    
    {
       if ($category->exists) {
            $menus = $category->menus()->latest()->get();
        } else {
            $menus = Menu::latest()->get();
        }
        return view('welcome',compact('menus','category'));
    
    }



    public function about()
    {

      return view('about');
    }
 

    public function cart()
    {

      return view('cart');
    }


    public function menu()
    {
      // if ($category->exists) {
      //       $menus = $category->menus()->latest()->get();
      //   } else {
            $menus = Menu::latest()->get();
        // }
        return view('menu',compact('menus'));
    }


   public function view()

   {

    return view('layouts.vmenu');

   }

   public function storemenu(Request $request)

   {
        $order = new Category;
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->phonenumber = $request->input('phonenumber');
        $order->menu = $request->input('menu');
        $order->save();

         return redirect('/');
    
   }

}

