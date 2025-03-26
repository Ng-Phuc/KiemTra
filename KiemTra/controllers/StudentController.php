<?php
require_once __DIR__ . '/../models/Student.php';
require_once __DIR__ . '/../config/database.php';



class StudentController {
    private $studentModel;
    
    public function __construct() {
        global $conn;
        $this->studentModel = new Student($conn);
    }
    
    public function index() {
        $students = $this->studentModel->getAllStudents();
        include __DIR__ . '/../views/students/index.php';
    }
    
    public function create() {
        include '../views/students/add.php';
    }    
    
    public function store() {
        $data = [
            $_POST['MaSV'],
            $_POST['HoTen'],
            $_POST['GioiTinh'],
            $_POST['NgaySinh'],
            $_POST['Hinh'],
            $_POST['MaNganh']
        ];
        $this->studentModel->addStudent($data);
        echo "<script>alert('Thêm sinh viên thành công!'); window.location='index.php';</script>";
    }
    
    public function edit() {
        $id = $_GET['id']; 
        $student = $this->studentModel->getStudentById($id);
        include __DIR__ . '/../views/students/edit.php';
    }
    
    
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                $_POST['HoTen'],
                $_POST['GioiTinh'],
                $_POST['NgaySinh'],
                $_POST['Hinh'],
                $_POST['MaNganh'],
                $id
            ];
            $this->studentModel->updateStudent($data);
            echo "<script>alert('Cập nhật sinh viên thành công!'); window.location='index.php';</script>";
        } else {
            echo "Yêu cầu không hợp lệ!";
        }
    }
    
    
    public function delete($id) {
        $this->studentModel->deleteStudent($id);
        echo "<script>alert('Xóa sinh viên thành công!'); window.location='index.php';</script>";
    }
    
    
    public function destroy() {
        $id = $_GET['id'];
        $this->studentModel->deleteStudent($id);
        echo "<script>alert('Xóa sinh viên thành công!'); window.location='index.php';</script>";
    }
    
    
    public function detail($id) {
        $student = $this->studentModel->getStudentById($id);
        include __DIR__ . '/../views/students/detail.php';
    }
}
?>