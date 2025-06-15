<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsCategory extends Model
{
    /** @use HasFactory<\Database\Factories\JobsCategoryFactory> */
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
