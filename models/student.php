<?php
class Student {
    public $name;
    public $major;
    public $subjects;

    public function __construct($name, $major, $subjects) {
        $this->name = $name;
        $this->major = $major;
        $this->subjects = $subjects;
    }

    // Converts the student object to an associative array
    public function to_array() {
        return [
            'name' => $this->name,
            'major' => $this->major,
            'subjects' => $this->subjects
        ];
    }
}
?>