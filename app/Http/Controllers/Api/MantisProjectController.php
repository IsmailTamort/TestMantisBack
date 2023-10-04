<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\MantisProjectResource;
use App\Models\MantisProject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MantisProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $projects = MantisProject::orderByBugCount()->get();

            if ($projects->isEmpty()) {
                // Handle the case where no projects are found
                return response()->json(['message' => 'No projects found'], 404);
            }

            return MantisProjectResource::collection($projects);
        } catch (\PDOException $e) {
            // Handle database connection or query errors
            return response()->json(['message' => 'Database error'], 500);
        } catch (\Exception $e) {
            // Handle other exceptions and return an error response
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MantisProject $mantisProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MantisProject $mantisProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MantisProject $mantisProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MantisProject $mantisProject)
    {
        //
    }
}
