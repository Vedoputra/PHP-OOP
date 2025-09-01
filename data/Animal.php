<?php

namespace Data{
    abstract class Animal{
        public string $name;

        abstract public function run() :void;
    }

    class Dog extends Animal{
        public function run(): void{
            echo "Anjing $this->name is running ". PHP_EOL;
        }
    }

    class Cat extends Animal{
        public function run(): void
        {
            echo "Kucing $this->name is running" . PHP_EOL;
        }
    }
}