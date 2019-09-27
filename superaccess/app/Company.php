<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function park(){
        return $this->belongsTo(Park::class);
    }
}
