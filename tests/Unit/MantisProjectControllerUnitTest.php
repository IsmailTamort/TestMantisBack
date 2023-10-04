<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class MantisProjectControllerUnitTest extends TestCase
{


    public function testIndexHandlesNoProjects()
    {
        // Ensure there are no projects in the database
        DB::table('mantis_project_table')->truncate();

        // Make a GET request to the 'index' endpoint
        $response = $this->get('/api/projects');

        // Assert that the response has a 404 status code when no projects are found
        $response->assertStatus(404);

        // Assert that the response  the "No projects found" message
        $response->assertJson(['message' => 'No projects found']);

    }

}

