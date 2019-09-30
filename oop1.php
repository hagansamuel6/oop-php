<?php

//print("hello world");
//echo "hello world";

class Student {

}

$student1 = new Student;
$student1->first_name;

//echo $student1->first_name;

get_class($student1);

$classes = get_declared_classes();

$classNames = [get_class($student1), 'People', 'World'];

$class = implode(",", $classes) . "</br>";

foreach($classNames as $className) {
    if(class_exists($className)){
        echo "ClassName: " . $className . "</br>";
    }else {
        echo "Class not found" . "</br>";
    }
};

?>