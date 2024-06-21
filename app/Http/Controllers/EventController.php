<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function eventHistory()
    {
        // Example data, you should fetch this from your database
        $programs = [
            (object)[
                'id' => 1,
                'status' => 'Completed',
                'name' => 'Event 1',
                'time' => '2023-01-01 10:00:00'
            ],
            (object)[
                'id' => 2,
                'status' => 'Pending',
                'name' => 'Event 2',
                'time' => '2023-02-01 14:00:00'
            ]
        ];

        // Pass the programs data to the view
        return view('pages.profile.history-event', compact('programs'));
    }
}
