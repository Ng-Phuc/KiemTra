<?php
require_once '../config/database.php';
require_once '../controllers/StudentController.php';
require_once '../controllers/CourseController.php';

$controller = new StudentController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$courseController = new CourseController();

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        if (isset($_GET['id'])) {
            $controller->update($_GET['id']);
        } else {
            echo "ID không hợp lệ!";
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        } else {
            echo "ID không hợp lệ!";
        }
        break;
    case 'destroy':
        $controller->destroy();
        break;
    case 'detail':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $controller->detail($id);
        } else {
            echo "ID không hợp lệ";
        }
        break;
    case 'courses':
        $courseController->index();
        break;
    default:
        echo "Hành động không hợp lệ";
        break;
}
?>