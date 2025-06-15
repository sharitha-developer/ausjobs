<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function jobsCategories(): BelongsToMany
    {
        return $this->belongsToMany(JobsCategory::class);
    }

 

    // public function tag(string $name):void
    // {

    //     $tag = Tag::firstOrCreate(['name' => $name]);
    //     $this->tags()->attach($tag);
    // }
}
