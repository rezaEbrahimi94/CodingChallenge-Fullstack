<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * Test the metadata endpoint of the API
     *
     * @return void
     */
    public function testMetadataTest()
    {
        $response = $this->get(route('api.metadata.all'));

        $response
            ->assertStatus(200)
            ->assertJsonStructure( [
                '*' => [
                    'published_at', 'author', 'cover'
                ]
            ])
        ;
    }
}
