<?php

    class Student {
        var $firstname;
        var $lastname;
    }

    $student1 = new Student;
    $student1->firstname = "samuel";
    $student1->lastname = "hagan";

    //echo get_class($student1) . "<br>";

    //echo get_class_vars("Student");

    echo get_object_vars($student1);

    // echo $student1->firstname;


?>