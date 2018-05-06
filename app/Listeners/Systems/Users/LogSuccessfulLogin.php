<?php

namespace App\Listeners\Systems\Users;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

// ログイン成功時のリスナークラス
class LogSuccessfulLogin implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param Login $event
     *
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->last_login = date('Y-m-d H:i:s');
        $event->user->save();
    }
}
