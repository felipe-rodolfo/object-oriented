<?php
declare(strict_types=1);

require '../vendor/autoload.php';


class Teacher {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Classroom {
    private $teacher;

    public function __construct($teacher) {
        $this->teacher = $teacher;
    }

    public function getTeacherName() {
        return $this->teacher->getName();
    }
}

$teacher = new Teacher("Mr. Smith");
$classroom = new Classroom($teacher);

echo $classroom->getTeacherName();