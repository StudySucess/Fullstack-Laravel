<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Vak;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'text',
        'upload',
        'vak_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function vak() 
    {
        return $this->belongsTo('App\Models\Vak');
    }
}
