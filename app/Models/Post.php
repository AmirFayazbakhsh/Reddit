<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class Post extends Model
{
    use HasFactory  ,   SoftDeletes;

    protected $fillable = [
        'user_id',
        'community_id',
        'title',
        'post_text',
        'post_url',
        'post_image',
    ];

}
