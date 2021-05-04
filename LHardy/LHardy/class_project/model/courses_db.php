<?php

    function coursePicked($coursePicked){
        global $db;
        $query = 'SELECT * FROM courses
                  WHERE courseName = :courseName ';
        $statement = $db->prepare($query);
        $statement->bindValue(':courseName ', $courseName );
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }
 
    function get_courses(){
        global $db;
        $query = 'SELECT * FROM courses
                  ORDER BY courseName';
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }
    
    function get_student($student_ID) {
    global $db;
    $query = 'SELECT * FROM student_profile
              WHERE studentID = :student_ID';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(":student_ID", $student_ID);
            $statement->execute();
            $profile = $statement->fetch();
            $statement->closeCursor();
            return $profile;
        } 
        catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        } 
    }

    function enroll_student($studentID, $name, $courseID, $courseName){
        global $db;
        $query = 'INSERT INTO enrolled_student
                    (studentID, name, courseID, courseName)
                  VALUES
                    (:studentID, :name, :courseID, :courseName)';
        $statement = $db->prepare($query);
        $statement->bindValue(':studentID', $studentID);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':courseID', $courseID);
        $statement->bindValue(':courseName', $courseName);
        $statement->execute();
        $statement->closeCursor();
    }
    
?>