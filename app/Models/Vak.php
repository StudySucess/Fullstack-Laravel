<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class Vak extends Model
{
    use HasFactory;

    protected $table = 'vakken';

    public function posts() 
    {
        return $this->hasMany('App\Models\Post');
    }
}
