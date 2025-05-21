<?php

namespace App;

class Salutation
{
    public function greet($name)
    {

        return <<<HTML
            Hello, $name!
        HTML;
    }
}
