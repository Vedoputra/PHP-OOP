<?php

trait A{
    function doA(): void{
        echo "doa" . PHP_EOL;
    }

    function doB(): void{
        echo "dob" . PHP_EOL;
    }
}

trait B {
    function doA(): void{
        echo "DOA" . PHP_EOL;
    }

    function doB():void{
        echo "DOB" . PHP_EOL;
    }
}

class Sample{
    use A,B{
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();