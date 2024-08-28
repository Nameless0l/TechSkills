<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'content',
        'title'
    ];
    public function images(): HasMany
    {
        return  $this->hasMany(Picture::class,"idTable");
    }

    public function comment():HasMany
    {
        return  $this->hasMany(Comment::class);
    }
}
