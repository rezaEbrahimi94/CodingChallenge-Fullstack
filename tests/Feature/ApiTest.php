<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Shelf;
use App\Models\Book;


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


    public function testShelfBooks()
    {
        $slug = Shelf::first()->slug;
        $response = $this->get('api/shelf/'.$slug.'/read');

        $response
            ->assertStatus(200)
            ->assertJsonStructure( [
                'data'=>[
                    '*' => [
                        'book_id', 'name', 'isbn'
                    ]
                ]
            ])
        ;
    }

    public function testBook()
    {
        $id = Book::first()->book_id;
        $response = $this->get('api/books/'.$id);

        $response
            ->assertStatus(200)
            ->assertJsonStructure( [
                'data'=>[
                    
                    "book_id",
                    "shelf_id",
                    "name",
                    "isbn",
                    "created_at",
                    "updated_at"                   
                         
                ]
            ])
        ;
    }

    
}
