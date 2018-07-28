<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Menu extends Model
{
   protected $guarded = [];

   public function path()
   
   {
   		return "/menu/{$this->category->slug}/{$this->id}";
   }

 //   	public function paths()

	// {
	// 	return "/cart/ {$this->cart->slug}/edit";

	// }

    public function category()
    {

        return $this->belongsTo(Category::class);
    }
}
