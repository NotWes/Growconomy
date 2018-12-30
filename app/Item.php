<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function search($query, $s){

    	return $query->where('item', 'like', '%' .$s. '%');

    }
}
