<?php

use App\Models\Book;
use App\Models\Shelf;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        factory(Shelf::class, 5)->create()->each(function ($u) {
            $u->books()->saveMany(factory(Book::class,10)->make());
        });
    }
}
