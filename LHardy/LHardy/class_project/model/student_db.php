<?php

    function name($name){
        global $db;
        $query = 'SELECT * FROM registration
                  WHERE name = :name';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $registration = $statement->fetchAll();
        $statement->closeCursor();
        return $registration;
    }

    function get_registration(){
        global $db;
        $query = 'SELECT * FROM registration
                  ORDER BY name';
        $statement = $db->prepare($query);
        $statement->execute();
        $registration = $statement->fetchAll();
        $statement->closeCursor();
        return $registration;
    }
    
    function register($name, $gender, $studentID, $email, $password){
        global $db;
        $query = 'INSERT INTO registration
                    (name, gender, studentID, email, password)
                  VALUES
                    (:name, :gender, :studentID, :email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':studentID', $studentID);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function update_register($name, $gender, $studentID, $email, $password){
        global $db;
        $query = 'INSERT INTO registration
                    (name, gender, studentID, email, password)
                  VALUES
                    (:name, :gender, :studentID, :email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':studentID', $studentID);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
     
    function delete_student($name) {
        global $db;
        $query = 'DELETE FROM registration
                  WHERE name = :name';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $statement->closeCursor();
    }
    
?>