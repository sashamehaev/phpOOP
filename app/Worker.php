<?php

namespace App;

class Worker {
    private string $name;
    private int $age;
    private array $hours;
    private string $position;

    public function __construct($name, $age, $hours) {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work() {
        print_r('im working');
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getPosition() {
        return $this->position;
    }
}