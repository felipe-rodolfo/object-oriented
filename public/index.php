<?php
declare(strict_types=1);

require '../vendor/autoload.php';


class Employee {
    private $name;
    private $position;

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName() {
        return $this->name;
    }

    public function getPosition() {
        return $this->position;
    }
}

class Department {
    private $name;
    private $employees = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}

$employee1 = new Employee("John Doe", "Manager");
$employee2 = new Employee("Jane Smith", "Developer");

$department = new Department("IT Department");

$department->addEmployee($employee1);
$department->addEmployee($employee2);

$employeesInDepartment = $department->getEmployees();