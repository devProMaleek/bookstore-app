<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publication_year'];

    /**
     * Get all of the authors for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function authors(): HasManyThrough
    {
        return $this->hasManyThrough(Author::class, BookAuthor::class, 'book_id', 'id', 'id', 'author_id');
    }
}
