<?php

namespace Gcchaan\Hello;

class Hello
{
    private $VERSION = '0.0.2';
    public function greet() {
        echo "Hello {$this->VERSION}";
    }
}

$hello = new Hello();
$hello->greet();
