<?php
class Student {

}

$student1 = new Student;

echo get_class($student1) . "<br>";

$classNames = ['Student', 'People', 'World', 'student'];

$class = implode(",", $classNames) . " </br>";

foreach($classNames as $className) {
    if(is_a($student1, $className)){
        echo "student1 is a  {$className} </br>";
    }else {
        echo "student1 is not {$className} </br>";
    }
};

?>