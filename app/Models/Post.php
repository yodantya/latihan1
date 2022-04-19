<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body'];

    //fungsi sama aja sama fillable tetapi jika menambah filed tidak perlu menambah lagi di arraynya
    protected $guarded = ['id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
