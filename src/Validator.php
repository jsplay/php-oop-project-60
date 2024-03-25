<?php

namespace Php\Package;

//use Tightenco\Collect\Support\Collection;

class Validator
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getString(): string
    {
        return $this->string;
    }

}
