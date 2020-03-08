<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{

    use WithFaker;

    public function a_user_can_create_a_project()
    {

        $attributes = [

        ];
        $this->post('/projects', [

        ]);


        $this->assertDatabaseHas('projects',$attributes);
    }
}
