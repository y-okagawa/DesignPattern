<?php


namespace App\Adapter;


class Banner
{
    /** @var string $string */
    private $string;

    /**
     * Banner constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function showWithParen(): void
    {
        echo sprintf("(%s)%s", $this->string, PHP_EOL);
    }

    public function showWithAster(): void
    {
        echo sprintf("*%s*%s", $this->string, PHP_EOL);
    }
}