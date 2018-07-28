<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

   public function poli()

	{
		return "/cart/{$this->id}/bill";

	}

	public function paths()

	{
		return "/cart/{$this->id}/edit";

	}
	public function delpaths()

	{
		return "/cart/{$this->id}";

	}

}