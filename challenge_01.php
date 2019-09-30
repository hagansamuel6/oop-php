<?php

    class Bicycle {
        var $model;
        var $brand;
        var $year;
        var $description;
        var $weight_kg;
        var $className = "Bicycle";


        function name(){
            return $this->model . " " . $this->brand . " " . $this->year;
        }

        function weight_lbs(){
            $weight_lbs = $this->weight_kg * 2.2046226218;
            return $weight_lbs;
        }

        function set_weight_lbs($weight_lbs){
            $this->weight_kg = $weight_lbs/2.2046226218;
        }
    }


    $b1 = new Bicycle;
    $b1->model = "f1";
    $b1->brand = "hitachi";
    $b1->year = 2005;
    $b1->description = "your super bicycle";
    $b1->weight_kg = 14;

    $b1->set_weight_lbs(30);

    echo "Bicycle's name is " . $b1->name() . "<br>";
    echo "This bicycle weighs " . $b1->weight_lbs() . " lbs <br>";

    echo "Class vars: <br>";
    echo "<pre>";
    print_r(get_class_vars("Bicycle")) . "<br>";

    //get class variables 
    //echo implode(",", get_class_vars("Bicycle")) . " <br>"; 

    echo "Object vars: <br> ";
    echo "<pre> "; 
    print_r(get_object_vars($b1)); //get object variables

    if(property_exists($b1, $b1->brand)){
        echo "property does exist";
    }else {
        echo "property does not exist";
    }
?>