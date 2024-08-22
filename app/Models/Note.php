<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'only_author',
    ];

    public function user() {
        return $this->belongsTo(User::class);
        
    }

    public function scopeAllowedToSee(Builder $query)
    {
        $query->where('user_id', auth()->id())->orWhere('only_author', false);
    }
}
