<?php

namespace App\Repositories;

use App\Repositories\ShelfRepositoryInterface;
use App\Models\Shelf;

class ShelfRepository implements ShelfRepositoryInterface 
{

    public function getShelfBooksBySlug($slug) 
    {
        return Shelf::where('slug',$slug)->firstOrFail()->books()->select('book_id','name','isbn')->get();;
    }

}