<?php

declare(strict_types=1);

namespace App\Iterator;

class Book
{
    /** @var string $name */
    private $name;

    /**
     * Book constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}