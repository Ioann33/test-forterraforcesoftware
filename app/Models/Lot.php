<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
