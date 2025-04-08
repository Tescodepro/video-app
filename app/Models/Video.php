<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // fillable
    protected $fillable = [
        'title',
        'description',
        'url',
        'thumbnail',
        'user_id',
        'category_id',
        'status',
        'visibility',
        'type',
    ];
    // casts
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    // hidden
    protected $hidden = [
        'user_id',
        'category_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
