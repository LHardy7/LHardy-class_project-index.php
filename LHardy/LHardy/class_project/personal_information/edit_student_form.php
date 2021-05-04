<?php include '../view/header.php'; 
require('../model/database.php');

$student_ID = filter_input(INPUT_POST, 'student_ID', FILTER_VALIDATE_INT);
$query = 'SELECT *
          FROM student_profile
          WHERE studentNUM=:student_ID';
$statement = $db->prepare($query);
$statement-> bindValue(':student_ID' , $student_ID);
$statement->execute();
$profile = $statement->fetch();
$statement->closeCursor();
?>`


<main>
     <h2>Edit Student</h2>
        <form action="index.php" method="post"
              id="edit_student_form">
            <input type="hidden" name="action" value="update_student">
            <input type= "hidden" name ="student_ID" value ="<?php echo $studentNUM;?>">
            
            <label>Name:</label>         
            <input type="text" name="studentName" value="<?php echo htmlspecialchars($profile['studentName']);?>">
            <br>
                              
            <label>Birthday:</label>
            <input type="text" name="birthdate" value="<?php echo htmlspecialchars($profile['birthdate']);?>"><br>

            <label>Gender:</label>
            <input type="text" name="gender" value="<?php echo htmlspecialchars($profile['gender']);?>"><br>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($profile['email']);?>"><br>
            
            <label>Password:</label>
            <input type="text" name="password" value="<?php echo htmlspecialchars($profile['password']);?>"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Update Student"><br>
        </form>
        <p><a href="index.php">View Student Profiles</a></p>
    </main>
<?php include '../view/footer.php' ?>  






















