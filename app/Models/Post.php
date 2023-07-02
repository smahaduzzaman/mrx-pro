<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPostCountByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)->count();
    }

    public function getSoftDeletedPosts()
    {
        return $this->onlyTrashed()->get();
    }
}
