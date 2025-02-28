<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        
        $project = Project::all();

        $data = [
            'result' => $project
        ];

        return response()->json($data);
    }

    public function show(string $slug) {

        $project = Project::where('slug', $slug)->first();

        return response() -> json([
            'results' => $project,
        ]);
    }
}
