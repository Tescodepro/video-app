<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    // fillable
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'icon',
        'color',
        'type',
        'status',
        'visibility',
        'parent_id',
        'order',
    ];
    // casts
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
