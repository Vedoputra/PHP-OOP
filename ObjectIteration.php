<?php

class Data implements IteratorAggregate{
    var string $first = "first";
    public string $second = "second";
    protected string $third = "third";
    private string $fourth = "fourth";

    // public function getIterator() :Traversable
    // {

    // $array =[
    //     "first"=>$this->first,
    //     "second"=>$this->second,
    //     "third"=>$this->third,
    //     "fourth"=>$this->fourth,
    // ];
    //  return new ArrayIterator($array);
    // }

    public function getIterator(): Traversable
    {
        yield"first"=>$this->first;
        yield"second"=>$this->second;
        yield"third"=>$this->third;
        yield"fourth"=>$this->fourth;
    }
}

$data = new Data();

foreach($data as $property => $value){
    echo "$property : $value" . PHP_EOL;
}