<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use SoftDeletes;
    
    public function category_slug() {
        return $this->belongsTo('App\Category', 'category_id', 'id')->take(1)->pluck('slug')[0];
    }
}
