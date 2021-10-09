<?php

namespace Gcchaan\Hello;

class Hello
{
    private $VERSION = 'main';
    public function greet() {
        echo "Hello {$this->VERSION}";
    }
}

$hello = new Hello();
$hello->greet();
