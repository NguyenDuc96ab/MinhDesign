<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'content',
        'slug',
        'category_id',
        'active',

    ];



    public function imgPro()
    {
        return $this->hasMany(Image_Projects::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
