<?php


namespace App\TemplateMethod;


class StringDisplay extends AbstractDisplay
{

    private $string;
    private $width;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = mb_strwidth($string);
    }

    public function open(): void
    {
        $this->printLine();
    }

    public function print(): void
    {
        echo sprintf("|%s|%s", $this->string, PHP_EOL);
    }

    public function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo '+';
        for ($i=0; $i<$this->width; $i++) {
            echo '-';
        }
        echo sprintf("+%s", PHP_EOL);
    }
}