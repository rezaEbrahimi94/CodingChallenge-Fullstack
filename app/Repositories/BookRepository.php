<?php

namespace App\Repositories;

use App\Repositories\BookRepositoryInterface;
use App\Models\Book;

class  BookRepository implements BookRepositoryInterface 
{

    public function show($id) 
    {
        return Book::findOrFail($id);
    }

}