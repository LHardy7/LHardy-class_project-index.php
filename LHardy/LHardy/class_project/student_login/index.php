<?php

require('../model/database.php');
require('../model/student_db.php');
require('../model/login_db.php');


session_start();

$action = filter_input(INPUT_POST, 'action');
    if ($action === NULL) {
        $action = filter_input(INPUT_GET, 'action');
            if ($action === NULL) {
                $action = 'student_confirmed';
            }
    }

switch($action){
    case 'student_confirmed':
        $studentID = filter_input(INPUT_POST,"studentID");
        $email = filter_input(INPUT_POST,"email");
        $password = filter_input(INPUT_POST, "password");
        $result = login($studentID, $email, $password);  
        
        if ($result == 1){           
            $student_name = getStudentName($password);          
             echo "Welcome, " .$student_name. "!";                                 
        }            
        elseif($email OR $studentID != $password){
           $error = "Type carefully in the required fields.";
           include('../errors/error.php');
        }
        else{
            include('../student_login/login_form.php');
        }
    break;        
}

?>