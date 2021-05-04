<?php

function login($studentID, $email, $password){
    global $db;
        $query = "SELECT COUNT(*) AS result FROM login 
            WHERE (studentID = ? AND login.password = ?) OR (email = ?
            AND login.password = ?)";  
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(1, $studentID);       
            $statement->bindValue(2, $password);
            $statement->bindValue(3, $email);
            $statement->bindValue(4, $password); 
            $statement->execute();
            $results = $statement->fetch();
            $statement->closeCursor();
            return $results['result'];
        } 
        catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('../errors/database_error.php');
            exit();
        }

}

function getStudentName($password){
    global $db;
        $query = "SELECT student_name FROM login 
            WHERE password= ?";  
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(1, $password);      
            $statement->execute();
            $results = $statement->fetch();
            $statement->closeCursor();      
            return $results['student_name'];
        } 
        catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('../errors/database_error.php');
            exit();
        }
}

?>