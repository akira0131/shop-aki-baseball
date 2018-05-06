<?php

namespace App\Http\Controllers\Systems;

use App\Notifications\DashboardNotification;

use Illuminate\Support\Facades\Auth;

class NotificationController
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAllAsRead()
    {
        Auth::user()->unreadNotifications
            ->where('type', DashboardNotification::class)
            ->markAsRead();

        return redirect()->back();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        Auth::user()->notifications()
            ->where('type', DashboardNotification::class)
            ->delete();

        return redirect()->back();
    }
}
