<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use Image;
use Illuminate\Http\Request;

class MenuController extends Controller
{
 
     public function __construct()
     {
         $this->middleware('auth');
     }

   
    public function display()
    {
         $menus = Menu::all();
       // return $menus;
        return view('admin.partial.menu', compact('menus'));
    }

     public function view()
    {
        $menus = Menu::Latest()->get();
        //return $menus;
        return view('admin.layouts.tablemenu' , compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partial.addmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $request->creating();
        if($request->hasFile('menu_img')){
            $filenameWithExt = $request->file('menu_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('menu_img')->getClientOriginalExtension();
            // Filename To Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Uplopad the image
            $path =$request->file('menu_img')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpg';          
        }



         $thread = Menu::create([
            'category_id' => request('category_id'),
             'title' => request('title'),
            'price'  => request('price'),
            'menu_img' => $fileNameToStore
         ]);
 

         return redirect('/admin');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Resposssnse
     */
    public function show($categoryId, Menu $menu)
    {
        // return $menu;
        $user = User::all();
       return view('partial.showmenu',compact('menu','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
          $menus = Menu::Latest()->get();
        return view('admin.partial.editmenu',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $this->validate($request,[
            'title' => 'required',
            'menu_img' => 'image|nullable|max:1999',
            'price' => 'required',  

        ]);        
        // $request->creating();
        if($request->hasFile('menu_img')){
            $filenameWithExt = $request->file('menu_img')->getClientOriginalName();
            // Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('menu_img')->getClientOriginalExtension();
            // Filename To Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Uplopad the image
            $path =$request->file('menu_img')->storeAs('public/cover_images', $fileNameToStore);
             
        }
         
        $menu -> update(request(['title']));    
        $menu ->update(request(['price']));
       
    
    if($request->hasFile('menu_img')){
            $menu->menu_img = $fileNameToStore;
        }
       $menu->save();
        return redirect('/admin/tablemenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
  
        {
        $menu->delete();
        // $books = Book::find($book);
        if(request()->wantsJson()){
            return response([], 204);
        }
        return redirect('admin/tablemenu');
    }
}
