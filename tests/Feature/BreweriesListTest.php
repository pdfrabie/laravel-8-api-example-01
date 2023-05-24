<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BreweriesListTest extends TestCase
{
    /**
     * Breweries List Test
     *
     * @return void
     */

    public function test_api_breweries_exist()
    {
        $response = $this->getJson('/api/breweries');
        $response->assertStatus(200);
    }

    public function test_api_breweries_returns_array()
    {
        $response = $this->getJson('/api/breweries');
        $response->assertJson([]);
    }

    public function test_api_breweries_returns_not_empty_array()
    {
        $this->getJson('/api/breweries')->assertJsonStructure([0]);
    }
}
