<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBacklogItemRequest;
use App\Http\Requests\CreateSprintRequest;
use App\Sprint;
use Illuminate\Http\Request;
use App\BacklogItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $backlogItems = BacklogItem::all();
        return view('home', compact('backlogItems'));
    }

    public function save(CreateBacklogItemRequest $request)
    {
        $data = $request->validated();
        $bli = new BacklogItem;
        $bli -> role = $data['role'];
        $bli -> activity = $data['activity'];
        $bli -> storypoints = $data['storypoints'];
        $bli -> save();

        return redirect()->route('home');
    }

    public function createSprint (CreateSprintRequest $request)
    {
        $data = $request->validated();
        $bli = new Sprint;
        $bli -> startdate = $data['startdate'];
        $bli -> enddate = $data['enddate'];
        $bli -> projectId = $data['projectId'];
        $bli -> save();

        return redirect() -> route('home');
    }
}
