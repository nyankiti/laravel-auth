<?php

namespace App\Listeners;

use App\Events\BlogPostCommented;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BlogPostCommentedNotification
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
     * @param  BlogPostCommented  $event
     * @return void
     */
    public function handle(BlogPostCommented $event)
    {
        //
    }
}
