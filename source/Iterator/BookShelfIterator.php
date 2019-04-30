<?php


namespace App\Iterator;


class BookShelfIterator implements Iterator
{
    /** @var BookShelf $bookShelf */
    private $bookShelf;
    /** @var int $index */
    private $index;

    /**
     * BookShelfIterator constructor.
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * @return bool
     */
    public function hasNext(): bool
    {
        return $this->index < $this->bookShelf->getLength();
    }

    /**
     * @return Object
     */
    public function next(): Object
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}