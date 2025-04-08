<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessVideo implements ShouldQueue
{
    use Queueable;
    public $video;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
       // Simulate processing
    sleep(5);

    $this->video->update(['status' => 'processed']);
    }
}
