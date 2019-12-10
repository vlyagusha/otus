<?php

declare(strict_types=1);

namespace Otus;

class Homework3
{
    public function sayHelloWorld(): string
    {
        return 'Hello, world!';
    }

    public function sayHello(string $name): string
    {
        return "Hello, $name!";
    }
}