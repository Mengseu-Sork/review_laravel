<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id'];
    protected $table = 'posts';
    protected $casts = [
        'created_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCreatedAtAttribute($value)
    {
        $date = date('F d, Y', strtotime($value));
        $day = date('l', strtotime($value));
        return $day . ', ' . $date;
    }
}
