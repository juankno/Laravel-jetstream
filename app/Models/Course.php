<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'user_id',
        'category_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";
    }


    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')
            ->where('id', '<>', $this->id)
            ->take(2)
            ->get();
    }
}
