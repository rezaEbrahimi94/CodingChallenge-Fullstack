<?php

namespace App\Repositories;

interface ShelfRepositoryInterface 
{
    public function getShelfBooksBySlug($slug);
}