<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\BlogPostCreated;
use App\Events\BlogPostCommented;
use App\Listeners\BlogPostCreatedLogging;
use App\Listeners\BlogPostCommentedLogging;
use App\Listeners\BlogPostCommentedNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // ブログ記事についてのeventとlistenerを登録
        BlogPostCreated::class => [
            BlogPostCreatedLogging::class,
        ],
        BlogPostCommented::class => [
            BlogPostCommentedLogging::class,
            BlogPostCommentedNotification::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
