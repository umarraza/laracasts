<?php


namespace App\Services;

class Example
{

    protected $foo;

    public function __construct(Foo $foo) {
        $this->foo = $foo;
    }

}
