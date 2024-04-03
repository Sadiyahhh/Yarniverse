<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index ()
    {
        // $project =  DB::table('projects')
        // ->where('projects.userID', '=', auth()->id())
        // ->get();

        return view ('myprojects');
    }

    public function store(Request $request) {

        // $project = new Project();

        $project = Project::create([
            'userID' => auth()->id(),
        ]);

        $project->projectTitle = $request->input('projectTitle');
        $project->projectDescription = $request->input('projectDescription');

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

        $project->notes = $request->input('notes');

        $project->save();

        return view('myprojects')->with('project', $project);


    }
}
