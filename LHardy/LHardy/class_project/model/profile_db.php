<?php

    function sprofile($studentName){
        global $db;
        $query = 'SELECT * FROM student_profile
                  WHERE studentName = :studentName ';
        $statement = $db->prepare($query);
        $statement->bindValue(':studentName ', $studentName );
        $statement->execute();
        $student_profile = $statement->fetchAll();
        $statement->closeCursor();
        return $student_profile;
    }
 
    function get_student_profile(){
        global $db;
        $query = 'SELECT * FROM student_profile
                  ORDER BY studentName';
        $statement = $db->prepare($query);
        $statement->execute();
        $student_profile = $statement->fetchAll();
        $statement->closeCursor();
        return $student_profile;
    }
    
 function update_student($studentNUM, $studentName, $birthdate, $gender, $email, $password) {
    global $db;
    $query = 'UPDATE student_profile
              SET studentName = :studentName,
                  birthdate = :birthdate,
                  gender = :gender,
                  email = :email,
                  password = :password         
              WHERE studentNUM = :studentNUM';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentName', $studentName );
    $statement->bindValue(':birthdate', $birthdate);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':studentNUM', $studentNUM);
    $statement->execute();
    $statement->closeCursor();
}
    
    
?>