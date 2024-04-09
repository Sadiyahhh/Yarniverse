<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index ()
    {
        // $projects =  DB::table('projects')
        // ->where('projects.userID', '=', auth()->id())
        // ->get();

        $projects = Project::where('userID', '=', auth()->id())
        ->get();

        // return view ('myprojects');
        return view('myprojects', [ 'projects' => $projects ]);
    }

    public function store(Request $request) {

        // $userID = $request->user;

        $project = Project::create([
            'userID' => auth()->id(),
            'projectTitle' => $request->projectTitle,
            'projectDescription' => $request->projectDescription,
            'image' => $request->image,
            'notes' => $request->notes,

        ]);
        // $project = new Project();
        // $userID = auth()->user()->id;


        // $project->projectTitle = $request->input('projectTitle');
        // $project->projectDescription = $request->input('projectDescription');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/project/', $filename);
            $project->image = $filename;
        } else {
            return $request;
            $project->image = ''; 
        }

        // $project->notes = $request->input('notes');

        $project->save();

        return back()->with('store', 'Project added!');
        // return view('myprojects')->with('project', $project);
        return view('myprojects', [ 'project' => $project ]);

    }

    public function removeProject (Request $request)
    {
        Project::where('projectID', $request->projectID)->delete();
        return back()->with('removeproject', 'Project deleted.');

    }

}
