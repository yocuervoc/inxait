<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    public function client(){
        return $this->hasOne(client::class);
    }
}
