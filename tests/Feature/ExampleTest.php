<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_detail_of_the_album_page()
    {

        $response = $this->get('/album/123');

        $response->assertStatus(200);
    }

    public function test_the_detail_of_the_album_page_contains_contents()
    {

        $response = $this->get('/album/123');

        $response->assertSee("<h2>List of albums:</h2>", false);
        $response->assertSee("<h2>Interpreter: </h2>", false);
        $response->assertSee("<h2>Rating: </h2>", false);
        $response->assertSee("<h2>Genre: </h2>", false);
        $response->assertSee("<h2>Year released: </h2>", false);
        $response->assertSee("<h2>Price:</h2>", false);
    }
}
