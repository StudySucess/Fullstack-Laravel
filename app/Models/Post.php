<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post_type', 'post_course', 'post_title', 'post_text', 'post_upload'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
