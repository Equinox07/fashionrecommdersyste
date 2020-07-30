<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uses extends Model
{
    protected $fillable = ['uses'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
