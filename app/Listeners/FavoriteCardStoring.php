<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\FavoriteCardMarking;
use Illuminate\Support\Facades\DB;

class FavoriteCardStoring
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(FavoriteCardMarking $event): void
    {
        DB::table('favorite_list')->insert([
            'userid' => $event->userid,
            'cardid' => $event->cardid,
            'image' => $event->image
        ]);
    }
}
