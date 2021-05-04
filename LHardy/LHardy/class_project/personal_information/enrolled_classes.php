<?php include '../view/header.php'; ?>

<main>
    <h1>Course Info </h1>
    <input type="hidden" name="course_search" 
               value="<?php echo htmlspecialchars($course_info); ?>">
    <table>
        <tr>
            <th>Course ID</th>
            <th>Name</th>
            <th>Semester</th>
            <th>Instructor</th>
            <th>Classroom</th>  
            <th>Time</th>
            <th>&nbsp;</th>           
        </tr>    
        
        <?php foreach ($courseName as $cname) : ?>
        <tr> 
            <td><?php echo htmlspecialchars($cname['courseID']); ?></td>
            <td><?php echo htmlspecialchars($cname['courseName']); ?></td>
            <td><?php echo htmlspecialchars($cname['semester']); ?></td>
            <td><?php echo htmlspecialchars($cname['instructor']); ?></td>
            <td><?php echo htmlspecialchars($cname['classroom']); ?></td>
            <td><?php echo htmlspecialchars($cname['time']); ?></td>  
            <td>
              <form action = "." method="post">
                 <input type = "hidden" name="action" value="enroll_student">
                 <input type = "submit" value = "Withdraw">           
              </form>           
             </td>
        </tr> 
                  
        <?php endforeach; ?>
    </table>
    <form action="search_courses.php">
        <p><input type="submit" value="Search"></p>
</form>
</main>

<?php include '../view/footer.php' ?>   
      