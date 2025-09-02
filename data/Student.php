<?php

class Student{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    function setSample(string $sample):void {
       $this->sample = $sample; 
    }

    public function __clone()
    {
        unset ($this->sample);
    }

    public function __toString(): string
    {
        return "Student $this->id, name: $this->name, value: $this->value". PHP_EOL;
    }

    public function __invoke(... $arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke students wiith arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "value"=>$this->value,
            "sample"=>$this->sample,
            "AUTHOR" => "KAdek Vedo",
        ];
    }
}