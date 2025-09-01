<?php

class Programmer {

    var string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class backend extends Programmer {

}

class Frontend extends Programmer{

}

class Company{
    public Programmer $programmer;  
}


function SayhelloProgrammer(Programmer $programmer){
    if($programmer instanceof backend){
        echo "Heloo dari backend $programmer->name". PHP_EOL;
    } elseif ($programmer instanceof Frontend){
        echo "Helo dari Frontend $programmer->name". PHP_EOL;
    } elseif ($programmer instanceof Programmer){
        echo "hello dari programmer $programmer->name". PHP_EOL;
    }
}