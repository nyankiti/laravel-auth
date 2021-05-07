<?php

namespace App\Listeners;

use App\Events\BlogPostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BlogPostCreatedLogging
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BlogPostCreated  $event
     * @return void
     */
    public function handle(BlogPostCreated $event)
    {
        //
    }
}
