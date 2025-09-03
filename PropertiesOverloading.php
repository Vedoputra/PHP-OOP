<?php

class zero{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties [$name];
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    public function __isset($name):bool
    {
        return isset ($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset ($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call function $name with argument $join". PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new zero();
$zero->Firstname = "Kadek";
$zero->Middlename = "Vedo";
$zero->lastName = "putra";

echo "FirstName : $zero->Firstname" .PHP_EOL;
echo "middlename : $zero->Middlename" . PHP_EOL;
echo "lastName: $zero->lastName" . PHP_EOL;

$zero->sayHello("Vedo", "putra");
zero::sayHello("vedo", "raharja");
