<?php

namespace Php\Package;

class String
{
    private string $string;
    private bool $required;

    public function isValid(string $string)
    {
        if ($string == null) {
            return false;
        }
    }
}
