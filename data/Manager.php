<?php

class Manager{
    var string $name;

    var string $title;

    public function __construct(string $nama = "", string $title = "manager") 
    {
        $this->name = $nama;
        $this->title = $title; 
    }

    public function SayHello(string $name){
        echo "hello $name, My name is  manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {

    public function __construct(string $nama = ""){
        parent::__construct($nama, "VP");
    }

    function SayHello(string $name){
        echo "hello $name, my name is VP $this->name". PHP_EOL;
    }

    public function getParent(string $name){
        return parent::SayHello($name);
    }
}