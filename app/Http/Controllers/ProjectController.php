<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index() {
        //obtient toutes les catégories
        $categories = Category::withCount('projects')->get();

        //obtient les 5 derniers articles
        $projects = Project::with('category')->paginate(5);

        //assigner les variables à la vue correspondante
        return view('project.index', [
            'categories' => $categories,
            'projects' => $projects
        ]);
            
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show', [
            'project' => $project,
            'categories' => Category::withCount('projects')->get(),
            ]
        );
    }
}
