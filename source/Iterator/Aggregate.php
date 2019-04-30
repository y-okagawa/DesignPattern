<?php

declare(strict_types=1);

namespace App\Iterator;

interface Aggregate
{
    /**
     * @return Iterator
     */
    public function iterator(): Iterator;
}