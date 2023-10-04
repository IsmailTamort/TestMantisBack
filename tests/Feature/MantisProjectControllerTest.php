<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\MantisProject;
use App\Http\Resources\MantisProjectResource;

class MantisProjectControllerTest extends TestCase
{ // tests/Feature/MantisProjectControllerTest.php

    public function testIndex()
    {
        // Make a GET request to the 'index' endpoint
        $response = $this->get('/api/projects');

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Define the expected response data
        $expectedData = [
            'data' => [
                [
                    'name' => 'Projet 2 CLI',
                    'bugs' => [
                        'ongoing' => 2,
                        'resolved' => 2,
                    ],
                    'improvements' => [
                        'ongoing' => 1,
                        'resolved' => 0,
                    ],
                ],
                [
                    'name' => 'Projet 1 CLI',
                    'bugs' => [
                        'ongoing' => 1,
                        'resolved' => 0,
                    ],
                    'improvements' => [
                        'ongoing' => 1,
                        'resolved' => 1,
                    ],
                ],
                [
                    'name' => 'Projet 3 CLI',
                    'bugs' => [
                        'ongoing' => 0,
                        'resolved' => 1,
                    ],
                    'improvements' => [
                        'ongoing' => 1,
                        'resolved' => 0,
                    ],
                ],
            ],
        ];

        // Assert that the response matches the expected data
        $response->assertJson($expectedData);
    }
}
