<?php
class Instrument {
    var $name;
    var $number;
    var $stock;


    function remainingStock(){
        return $this->stock;
    }

    function getClassMethods(){
        return get_class_methods("Instrument");
    }
}


$instr = new Instrument;
$instr->stock = 567;

echo $instr->remainingStock() . "<br>";

echo "This classes methods are " . implode(", <br>", $instr->getClassMethods());


if(method_exists($instr, $instr->remainingStock)){

}

//print_r(get_object_vars($instr));

?>


