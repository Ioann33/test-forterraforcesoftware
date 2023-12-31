<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
          'name',
          'lot_id'
    ];
    public function lot()
    {
        return $this->belongsTo(Lot::class);
    }
}
