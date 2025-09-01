<?php

class Person {

    const AUTHOR = "Kadek Vedo Putra Soma Raharja";
    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function SayHello(?string $name){
        if(is_null($name)){
            echo " hi my name is $this->name" . PHP_EOL;
        }else{
            echo "hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info(){
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}