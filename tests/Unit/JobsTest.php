<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Employer;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Jobs extends TestCase
{
     use RefreshDatabase;

    public function test_job_belongs_to_employer()
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);

        $this->assertInstanceOf(Employer::class, $job->employer);
        $this->assertEquals($employer->id, $job->employer->id);
    }
}
