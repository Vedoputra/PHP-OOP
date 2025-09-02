<?php

namespace Data\Traits;

trait SayGoodbye{
    function goodBye(?string $name){
        if (is_null( $name)){
            echo "good bye" . PHP_EOL;
        } else {
            echo "good bye $name" . PHP_EOL;
        }
    }
}


trait Sayhello {
    function Sayhello(?string $name){
        if (is_null($name)){
            echo "Heloo" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait CanRun{
    public abstract function Run (): void;
}

trait HasName{
    public string $name;
}

trait All{
    use Sayhello, SayGoodbye, HasName, CanRun {
        // goodBye as private;
        // Sayhello as private;
    }
}

class person {
    use All;

    function Run(): void
    {
        echo " person $this->name is running" . PHP_EOL;
    }
}