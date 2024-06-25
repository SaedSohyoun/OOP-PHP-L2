<?php

require_once 'Group.php';
require_once 'Student.php';
require_once 'Teacher.php';
require_once 'Schooltrip.php';

// Voorbeeld gebruik:
$groupA = new Group("Groep A");

$student1 = new Student("Jan", 16, $groupA, true);
$student2 = new Student("Piet", 17, $groupA, false);
$student3 = new Student("Kees", 16, $groupA, true);
$student4 = new Student("Marie", 16, $groupA, true);
$student5 = new Student("Emma", 17, $groupA, false);
$student6 = new Student("Sophie", 16, $groupA, true);

$teacher1 = new Teacher("Mr. Jansen", 35);
$teacher2 = new Teacher("Ms. De Vries", 40);

$schooltrip = new Schooltrip("Pretpark");

$schooltrip->addStudent($student1);
$schooltrip->addStudent($student2);
$schooltrip->addStudent($student3);
$schooltrip->addStudent($student4);
$schooltrip->addStudent($student5);
$schooltrip->addStudent($student6);

foreach ($schooltrip->schooltripLists as $list) {
    print_r($list->generateTripList());
}