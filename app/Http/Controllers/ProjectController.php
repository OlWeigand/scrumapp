<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::all();
        // project/index.blade.php
        return view('project.index', compact('projects'));
    }

    public function save(CreateProjectRequest $request)
    {
        $data = $request->validated();
        $project = new Project();
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->deadline = $data['deadline'];
        $project->save();

        return redirect()->back();
    }
}
