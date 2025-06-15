<?php

namespace Database\Seeders;

use Tests\Unit\Jobs;
use App\Models\JobsCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      JobsCategory::factory()->count(10)->create();
    }
}
