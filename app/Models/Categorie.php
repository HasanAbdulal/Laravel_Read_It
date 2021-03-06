<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
