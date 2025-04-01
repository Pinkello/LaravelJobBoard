<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        //Arrange, act, assert
        // $this->assertFalse(true);
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // expect($job->employer->is($employer))->toBeTrue();
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_tags(): void
    {
        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}
