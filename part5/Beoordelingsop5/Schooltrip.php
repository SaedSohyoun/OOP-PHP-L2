<?php

require_once 'SchooltripList.php';

class Schooltrip {
    private $destination;
    public $schooltripLists = [];

    public function __construct($destination) {
        $this->destination = $destination;
    }

    public function addSchooltripList() {
        $schooltripList = new SchooltripList();
        $teacher = array_shift(Teacher::$teachers);
        if ($teacher) {
            $schooltripList->addPerson($teacher);
        }
        $this->schooltripLists[] = $schooltripList;
    }

    public function addStudent($student) {
        if (empty($this->schooltripLists)) {
            $this->addSchooltripList();
        }

        $lastList = end($this->schooltripLists);
        if ($lastList instanceof SchooltripList && count($lastList->getStudents()) < 5) {
            $lastList->addStudent($student);
        } else {
            $this->addSchooltripList();
            $this->addStudent($student);
        }
    }
}