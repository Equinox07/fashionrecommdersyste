<?php

namespace App;

use App\Category;
use App\Properties;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function properties()
    {
        return $this->hasMany(Properties::class);
    }


    public function uses()
    {
        return $this->hasMany(Uses::class);
    }
}
