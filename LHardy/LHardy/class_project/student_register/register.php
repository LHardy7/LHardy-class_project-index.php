<?php include '../view/header.php'; ?>

<main>
    <h1> Student Registration </h1>
    <form action="index.php" method="post">
            <input type = "hidden" name = "action" value= "register">
            
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter First and Last Name"
                   required><br>

            <label>Gender:</label>
            <input type="text" name="gender" required><br>

            <label>ID:</label>
            <input type="text" name="studentID" 
                   placeholder="Use the S00000 format" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>
            
            <label>Password:</label>
            <input type="password" name="password" required><br>
            
            <label>Confirm Password:</label>
            <input type="password" name="confirmpw" required><br>
            
            <label>&nbsp;</label>
            
            <input type="submit" value="Submit"><br>
    </form>   
         <p><a href="?action=registered_students">View Registered List</a></p>
 </main>

<?php include '../view/footer.php'; ?>
