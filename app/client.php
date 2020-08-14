<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function  winner(){
        return $this->belongsto(Winner::class);
    }
}