<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        // Mi riprendo $projects richiamando insieme le relazioni con with
        $projects = Project::with('type', 'technologies')->get();

        // Definisco response
        $response = [
            'succcess' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $projects
        ];

        return response()->json([
            'succcess' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => $response
        ]);
    }
}
