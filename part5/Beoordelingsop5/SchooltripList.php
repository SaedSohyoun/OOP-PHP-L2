<?php

require_once 'Student.php';
require_once 'Teacher.php';

class SchooltripList {
    private $students = [];
    private $teacher = null;

    public function addPerson($person) {
        if ($person instanceof Student) {
            $this->students[] = $person;
        } elseif ($person instanceof Teacher) {
            $this->teacher = $person;
        }
    }

    public function generateTripList() {
        $list = [];
        foreach ($this->students as $student) {
            $list[] = [
                'naam' => $student->naam,
                'leeftijd' => $student->leeftijd,
                'groep' => $student->groep->naam,
                'heeftBetaald' => $student->heeftBetaald ? 'Ja' : 'Nee'
            ];
        }
        $teacherInfo = $this->teacher ? $this->teacher->naam : 'Geen docent';
        return [
            'students' => $list,
            'teacher' => $teacherInfo,
            'totalCollectedAmount' => Person::$totalCollectedAmount
        ];
    }

    public function addStudent($student) {
        $this->addPerson($student);
    }

    public function getStudents() {
        return $this->students;
    }
}