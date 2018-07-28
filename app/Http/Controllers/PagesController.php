<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Menu;
use App\Category;
class PagesController extends Controller
{

public function __construct()
    {
 
     $this->middleware('auth:admin')->except('index','show'); 

   }



    public function menu()

    {
         $menus = Menu::all();
    	return view('admin.partial.menu',compact('menus'));

    }


    public function orderlist()

    {

    	return view('admin.partial.orderlist');

    }


    public function userinfo()
    {
        $user = User::all();
        return view('admin.partial.userinfo', compact('user'));

    }


    public function admininfo()
    {
        $admin = Admin::all();
        return view('admin.partial.admininfo',compact('admin'));
    }


    public function booking()

    {

    	return view('admin.partial.booking');

    }

    public function showcateg()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.viewcateg',compact('categories'));
    }

    public function createcateg()
    {
        return view('admin.category.addcateg');
    }

    public function storecateg(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();

         return redirect('admin/category');
    }
}
