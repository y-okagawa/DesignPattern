<?php


namespace App\TemplateMethod;

use InvalidArgumentException;

class CharDisplay extends AbstractDisplay
{
    /** @var string $ch */
    private $ch;

    /**
     * CharDisplay constructor.
     * @param string $ch
     */
    public function __construct(string $ch)
    {
        if (mb_strlen($ch) > 1) {
            throw new InvalidArgumentException("not char argument");
        }
        $this->ch = $ch;
    }


    public function open(): void
    {
        echo '<<';
    }

    public function print(): void
    {
        echo $this->ch;
    }

    public function close(): void
    {
        echo sprintf(">>%s", PHP_EOL);
    }
}