<?php

namespace Helper;

class Mathhelper{
    static public string $name ="mathHelper";

    static public function sum (int... $numbers){
        $total = 0;
        foreach ($numbers as $number){
            $total += $number;
        }

        return $total;
    }
}