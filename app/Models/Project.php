<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 
                           'description', 
                           'project_image', 
                           'used_technologies',
                           'project_date', 
                           'link_github'
                          ];
}
