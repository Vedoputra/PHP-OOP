<?php

namespace Data{

    interface HasBrand{
        function  getBrand() : string;
    }

    interface IsMaintanance{
        function isMaintanance() : bool;
    }

    interface Car extends HasBrand{
        function drive() : void;

        function getTire(): int;
    }

    class Avanza implements car, IsMaintanance{
        function drive(): void
        {
            echo "drive avanza" . PHP_EOL;
        }

        function getTire(): int
        {
            return 4;
        }

        function getBrand(): string
        {
            return " toyota";
        }

        function isMaintanance(): bool
        {
            return false;
        }
    }

}