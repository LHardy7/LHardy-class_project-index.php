<?php
require('../model/database.php');
require('../model/student_db.php');
require('../model/courses_db.php');
require('../model/profile_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'student_profile';
    }
}

switch ($action) {
    case 'student_profile':
        $sprofile = filter_input(INPUT_GET,'studentName');
        $sprofile = get_student_profile();
        include('student_profile.php');
    break;   
    
    case 'edit_student_form':
        $studentNUM = filter(INPUT_POST,'studentNUM', FILTER_VALIDATE_INT);
        $profile = get_student_profile($studentNUM);
        $studentName = $profile['studentName'];
        $birthdate = $profile['birthdate'];
        $gender = $profile['gender'];
        $email = $profile['email'];
        $password = $profile['password'];
        include ('edit_student_form.php');
        break;
    
    case 'update_student':
       
        $studentNUM = filter_input(INPUT_POST,'studentNUM', FILTER_VALIDATE_INT);       
        $studentName = filter_input(INPUT_POST, 'studentName');
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $gender = filter_input(INPUT_POST, 'gender');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');    
       update_student($studentNUM, $studentName, $birthdate, $gender, $email, $password);
        header("Location: .");
        break;
        
}
 
?>