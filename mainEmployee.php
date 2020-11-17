<?php
require_once('./inc/config.inc.php');
require_once('./inc/entities/employee.class.php');
require_once('./inc/utilities/fileService.class.php');
require_once('./inc/utilities/EmployeeParser.class.php');
require_once('./inc/utilities/employeeDAO.class.php');
$input = json_decode(file_get_contents("php://input"));


switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":

         $data = EmployeeDAO::getemployees();
         if (!empty($data)) {
            echo json_encode($data);
         }
        
    break;

    case "POST":
        
        echo json_encode($input);
        EmployeeDAO::add_Employee($input);
        
    break;

    case "PUT":
       // EmployerDAO::editEmployer($input);

    break;

    case "DELETE":
        echo json_encode($input);
        EmployeeDAO::delete_Employee($input);
        
    break;


}






?>