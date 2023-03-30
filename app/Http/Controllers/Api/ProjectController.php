<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        // Per paginazione
        $projectsPerPage = 5;

        // Mi riprendo $projects richiamando insieme le relazioni con with
        // $projects = Project::with('type', 'technologies')->get();

        // Con paginazione
        $projects = Project::with('type', 'technologies')->paginate($projectsPerPage);

        // Path immagine
        foreach ($projects as $project) {
            if($project->img) {
                $project->img = asset('storage/'.$project->img);
                // Non salvo per non modificare db
            }
        }

        // Definisco e restituisco dati
        return response()->json([
            'succcess' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $projects
        ]);
    }

    public function show($slug) {

        // Riprendo dati
        $project = Project::where('slug', $slug)->with('type', 'technologies')->first();


        if ($project) {
             // Definisco e restituisco dati
            return response()->json([
                'succcess' => true,
                'code' => 200,
                'message' => 'Ok',
                'project' => $project
            ]);
        }
        // In caso non ci sia progetto
        else {
            return response()->json([
                'succcess' => false,
                'code' => 404,
                'message' => 'Not found',
            ]);
        }
    }
}
