<?php

namespace Block8\UI\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Block8\UI\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Redirect the user to the notification url and marks it as read
     *
     * @param string $notification
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show(string $notification)
    {
        $notification = Notification::find($notification);

        if (!$notification) {
            return redirect()
                ->back();
        }
        $notification->markAsRead();
        return redirect(url($notification->data['url']));
    }

    /**
     * Mark all unread notifications as read
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAllRead(User $user)
    {
        foreach($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }

        return redirect()
            ->back();
    }
}