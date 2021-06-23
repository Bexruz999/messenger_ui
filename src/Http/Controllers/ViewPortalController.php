<?php

namespace RTippin\MessengerUi\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ViewPortalController
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('messenger::portal')->with('mode', 5);
    }

    /**
     * @param string $thread
     * @return Application|Factory|View
     */
    public function showThread(string $thread)
    {
        return view('messenger::portal')->with([
            'mode' => 0,
            'thread_id' => $thread,
        ]);
    }

    /**
     * @param string $alias
     * @param string $id
     * @return Application|Factory|View
     */
    public function showCreatePrivate(string $alias, string $id)
    {
        return view('messenger::portal')->with([
            'mode' => 3,
            'alias' => $alias,
            'id' => $id,
        ]);
    }

    /**
     * @param string $thread
     * @param string $call
     * @return Application|Factory|View
     */
    public function showVideoCall(string $thread, string $call)
    {
        return view('messenger::video')->with([
            'threadId' => $thread,
            'callId' => $call,
        ]);
    }

    /**
     * @param string $invite
     * @return Application|Factory|View
     */
    public function showJoinWithInvite(string $invite)
    {
        return view('messenger::invitation')->with([
            'code' => $invite,
            'special_flow' => true,
        ]);
    }
}
