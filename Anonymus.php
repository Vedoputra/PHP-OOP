<?php

interface HelloWorld{
    function sayHelloworld() : void;
}

$helloworld = new class ("eko") implements HelloWorld{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function sayHelloworld(): void
    {
        echo "hello $this->name" . PHP_EOL;
    }
};

$helloworld->sayHelloworld();