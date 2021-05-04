<?php
require('../model/database.php');
require('../model/student_db.php');

$action = filter_input(INPUT_POST, 'action');
    if ($action === NULL) {
        $action = filter_input(INPUT_GET, 'action');
            if ($action === NULL) {
                $action = 'registered_students';
            }
    }

switch ($action) {
    
    case 'registered_students':
        $name = filter_input(INPUT_GET,'name');
        $name = get_registration();
        include('registered_students.php');
    break;
    
    case 'show_register_form':
        $name = get_registration();
        include('register.php');
    break;
    
    case 'register':
        $name = filter_input(INPUT_POST, 'name');
        $gender = filter_input(INPUT_POST, 'gender');
        $studentID = filter_input(INPUT_POST, 'studentID');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $confirmpw = filter_input(INPUT_POST, 'confirmpw');
            if (empty($name) || empty($gender) || empty($studentID) || 
                empty($email)||empty($password)|| empty($confirmpw)) {
                $error = "The required field(s) was not properly entered.";
                include('../errors/error.php');
            } 
            elseif($password != $confirmpw){
                echo "Passwords must match. Try again!";
            }
            else{
                register($name, $gender, $studentID, $email, 
                        $password,$confirmpw);
                header("Location: .");            
            }
    break;
    
    case 'delete_student':
        $name = filter_input(INPUT_POST, 'name');
        delete_student($name);
        header("Location: .");
    break;          
}

?>