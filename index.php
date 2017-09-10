<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- 
COMP4711 Lab 1
Site index
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');        
        $students = array();
        
        // adding student #1
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // adding student #2
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // adding student #3
        $third = new Student();
        $third->surname = "Elaschuk";
        $third->first_name = "Teah";
        $third->add_email('home', 'teahelaschuk@gmail.com');
        $third->add_email('work', 'nelaschuk1@bcit.ca');
        $third->add_grade(70);
        $third->add_grade(85);
        $third->add_grade(100);
        $students['t789'] = $third;
        
        // sort students
        ksort($students);
        
        //display
        echo 'Number of students: ';
        echo sizeof($students);
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
