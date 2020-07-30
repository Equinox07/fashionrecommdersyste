<?php

namespace App;

use App\Properties;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = ['description'];

    public function category()
    {
        return $this->belognsTo(Category::class);
    }
}
