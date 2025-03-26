<?php
class Course {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCourses() {
        $sql = "SELECT * FROM hocphan";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
