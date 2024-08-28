<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Editor extends Pivot
{
    use HasFactory;
    protected $table = 'editor';
    protected $fillable = [
            'biography',
            'socialNetworks',
            'user_id'
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
