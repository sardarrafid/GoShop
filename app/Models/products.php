<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'price',
        'stock',
        'image',
        'status',
    ];
         public function category()
    {
        return $this->belongsTo(categories::class);
    }
};


