<?php

namespace Data{
    class Shape {
        function getCorner(){
            return 0;
        }
    }

    class Rectangle extends Shape{
        function getCorner(){
            return 4;
        }

        public function getParentShape(){
            return parent::getCorner();
        }
    }
}

