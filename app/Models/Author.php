<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $hidden = ['laravel_through_key', 'created_at', 'updated_at'];

    /**
     * Get all of the books for the Author
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function books(): HasManyThrough
    {
        return $this->hasManyThrough(Book::class, AuthorBook::class, 'author_id', 'id', 'id', 'book_id');
    }
}
