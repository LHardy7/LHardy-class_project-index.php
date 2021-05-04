<?php

require('../model/database.php');
require('../model/login_db.php');
require('../model/courses_db.php');

$action = filter_input(INPUT_POST, 'action');
    if ($action === NULL) {
        $action = filter_input(INPUT_GET, 'action');
      if ($action === NULL) {
            $action = 'available_courses';
        }
    }

switch ($action) {
      
    case 'available_courses':
        $coursePicked = filter_input(INPUT_GET,'courseName');
        $coursePicked = get_courses();
        include('available_courses.php');
    break;   
            
    case 'csearch':
        $scourse = filter_input(INPUT_POST, 'scourse');
        if ($scourse == NULL || $scourse == FALSE) {
            $error = "Please properly search using the Course ID, Name, or Instructor.";
            include('../errors/error.php');
        } else { 
            $courseSearch = csearch($scourse);
            include('search_courses.php');
        }   
    break;
        
    case 'show_available_courses':
        include('available_courses.php');
    break;

    case 'enroll_student':
        include('enroll_confirmed.php');
    break;
}

?>