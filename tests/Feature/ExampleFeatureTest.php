<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_checks_if_homepage_loads_successfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Welcome');
    }
}
