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
        $projectsPerPage = 24;

        // Mi riprendo $projects richiamando insieme le relazioni con with
        // $projects = Project::with('type', 'technologies')->get();

        // Con paginazione
        $projects = Project::with('type', 'technologies')->paginate($projectsPerPage);

        // Path immagine
        // foreach ($projects as $project) {
        //     if($project->img) {
        //         $project->img = asset('storage/'.$project->img);
        //         // Non salvo per non modificare db
        //     }
        // }

        // Definisco e restituisco dati
        return response()->json([
            'succcess' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $projects
        ]);
    }
}
