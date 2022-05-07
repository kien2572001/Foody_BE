<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'time',
        'image',
        'rank',
    ];

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

}
