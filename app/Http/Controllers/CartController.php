<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create($categoryId, Menu $menu)
    {
       return view('partial.showmenu',compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Cart::create([
            'name' => request('name'),
            'title' => request('title'),
            'address'  => request('address'),
            'phone'  => request('phone'),
            'price'  => request('price'),
            'quantity'  => request('quantity'),
            'delivery_time'  => request('delivery_time')
         ]);

        return redirect()->route('cart.show', [$cart]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
       // $cart = Cart::all($cart);
      return view('cart',compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
    
        return view('partial.editcart',compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        // dd(request()->all());

            $cart -> update(request(['name']));    
            $cart -> update(request(['title']));    
            $cart -> update(request(['address']));    
            $cart -> update(request(['phone']));    
            $cart -> update(request(['price']));    
            $cart -> update(request(['quantity']));    
            $cart -> update(request(['delivery_time']));    


            $cart->save();

         return redirect()->route('cart.show', [$cart]);
    }

    public function showbill(Cart $cart)
    {
        // return $cart;
        return view('partial.bill',compact('cart'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
   {
        $cart->delete();
        if(request()->wantsJson()){
            return response([], 204);
        }
        return redirect('/');
    }  

}
