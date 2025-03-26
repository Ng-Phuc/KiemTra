<?php
require_once __DIR__ . '/../models/Course.php';
require_once __DIR__ . '/../config/database.php';

class CourseController {
    private $courseModel;

    public function __construct() {
        global $conn;
        $this->courseModel = new Course($conn);
    }

    public function index() {
        $courses = $this->courseModel->getAllCourses();
        include __DIR__ . '/../views/courses/index.php';
    }
}
?>
