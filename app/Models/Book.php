<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App\Models
 */
class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';

    /**
     * Shelf relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shelf()
    {
        return $this->belongsTo(Shelf::class,'shelf_id', 'shelf_id');
    }
}