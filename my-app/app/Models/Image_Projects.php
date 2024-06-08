<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Projects extends Model
{
    use HasFactory;
    protected $table = 'image_projects';

    protected $fillable = [
        'name',
        'project_id',

    ];

    public function imageproduct()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
