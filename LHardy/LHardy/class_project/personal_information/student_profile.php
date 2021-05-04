<?php include '../view/header.php'; ?>

<main>
    <h1>Profile</h1>
    <input type="hidden" name="student_profile" 
               value="<?php echo htmlspecialchars($student_profile); ?>">
    <table>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Email</th>  
            <th>&nbsp;</th>           
        </tr>    
        
        <?php foreach ($sprofile as $profile) : ?>
        <tr> 
           
            <td><?php echo htmlspecialchars($profile['studentName']); ?></td>
            <td><?php echo htmlspecialchars($profile['birthdate']); ?></td>
            <td><?php echo htmlspecialchars($profile['gender']); ?></td>
            <td><?php echo htmlspecialchars($profile['email']); ?></td>
            
            
            <td>
              <form action = "edit_student_form.php" method="post">
                 <input type="hidden" name="student_ID"
                           value="<?php echo $profile['studentNUM']; ?>">
                 <input type = "submit"  value = "Edit">           
              </form>           
             </td>
        </tr> 
            
        <?php endforeach; ?>
    </table>
</main>

<?php include '../view/footer.php' ?>   
      