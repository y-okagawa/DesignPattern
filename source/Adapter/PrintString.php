<?php


namespace App\Adapter;


interface PrintString
{
    public function printWeak(): void;
    public function printStrong(): void;
}