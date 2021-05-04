<?php include '../view/header.php'; ?>

<main>
    <h2>Login</h2>
        <p>You must login before accessing a student's information.</p>
        <form action="index.php" method="post">
           <input type="hidden" name="action" value="student_confirmed" >
         
            <label>Email:</label>
            <input type="text" name="email"  
                   placeholder="Use your registered email"><br>
            
            <label>Student ID:</label>
            <input type="text" name="studentID"  
                   placeholder="Use your student ID "><br>
            
            <label>Password:</label>
            <input type="password" name="password" 
                   placeholder="Enter the correct password" ><br>
            <input type="submit"  value="Login">
        </form>
        
</main>
<?php include '../view/footer.php'; ?>