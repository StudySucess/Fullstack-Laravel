<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'course',
        'title',
        'text',
        'upload'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
