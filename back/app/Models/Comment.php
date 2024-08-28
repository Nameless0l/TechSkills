<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Comment extends Pivot
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        'content'
    ];
    public function post():BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
