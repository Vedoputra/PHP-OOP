<?php

class Manager{
    var string $name;

    public function SayHello(string $name){
        echo "hello $name, My name is  manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {
    function SayHello(string $name){
        echo "hello $name, my name is VP $this->name". PHP_EOL;
    }

    public function getParent(string $name){
        return parent::SayHello($name);
    }
}