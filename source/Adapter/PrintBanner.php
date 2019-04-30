<?php


namespace App\Adapter;


class PrintBanner extends Banner implements PrintString
{

    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function printWeak(): void
    {
        $this->showWithParen();
    }

    public function printStrong(): void
    {
        $this->showWithAster();
    }
}