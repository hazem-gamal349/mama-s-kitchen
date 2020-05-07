<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = [
        'name'
    ];

    
    public function categories(){

        return $this->belongsTo('App\Category');
    }
}
