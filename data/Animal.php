<?php
namespace Data{
require_once "Food.php";

    abstract class Animal{
        public string $name;

        abstract public function run() :void;

        abstract public function eat(AnimalFood $animalFood) :void;
    }

    class Dog extends Animal{
        public function run(): void{
            echo "Anjing $this->name is running ". PHP_EOL;
        }

        public function eat(food $animalFood): void
        {
            echo "dog is eating" . PHP_EOL;
        }
    }

    class Cat extends Animal{
        public function run(): void
        {
            echo "Kucing $this->name is running" . PHP_EOL;
        }

        public function eat(AnimalFood $animalFood): void
        {
            echo "cat eating";
        }
    }
}