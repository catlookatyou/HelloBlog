<?php

namespace App\Listeners;

use App\Events\ChangePostTitle;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class PostTitle
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
     * @param  ChangePostTitle  $event
     * @return void
     */
    public function handle(ChangePostTitle $event)
    {
        $post = $event->post;
        $title = Carbon::now()->toDateTimeString();
        $post->title = 'time '.$title;
        $post->save();
    }
}
