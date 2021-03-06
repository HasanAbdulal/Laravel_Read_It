<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posts_has_tags');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
