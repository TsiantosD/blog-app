<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 

    protected $fillable = [
        'author_id',
        'title',
        'body',
        'slug',
    ];

    /**
     * https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
     * 
     * Return the author object of the post.
     * 
     * @return User
     */
    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }
}
