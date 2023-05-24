<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BreweriesSearchTest extends TestCase
{
    /**
     * Breweries Search Test
     *
     * @return void
     */

    public function test_api_breweries_search_exist()
    {
        $searchString = '101';
        $response = $this->getJson("/api/breweries/$searchString");
        $response->assertStatus(200);
    }

    /**
     * Breweries Search
     *
     * @return void
     */

    public function test_api_breweries_search_returns_array()
    {
        $searchString = '101';
        $response = $this->getJson("/api/breweries/$searchString");
        $response->assertJson([]);
    }
}
