<?php

declare(strict_types=1);

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