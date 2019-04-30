<?php

declare(strict_types=1);

namespace App\Iterator;

interface Iterator
{
    public function hasNext(): bool;
    public function next(): Object;
}