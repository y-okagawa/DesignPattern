<?php

declare(strict_types=1);

namespace App\Iterator;

class BookShelf implements Aggregate
{
    /** @var Book[] $books */
    private $books;
    /** @var int $last */
    private $last = 0;

    public function __construct()
    {

    }

    /**
     * @param int $index
     * @return Book
     */
    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    /**
     * @param Book $book
     */
    public function appendBook(Book $book): void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->last;
    }

    /**
     * @return Iterator
     */
    public function iterator( ): Iterator
    {
        return new BookShelfIterator($this);
    }
}