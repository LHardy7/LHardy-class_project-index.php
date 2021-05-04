 <?php include '../view/header.php'; ?>

<main>
    <h1>Course Info </h1>
    <form action ="." method="post" id="course_search">
        <input type ="hidden" name="action" value ="enroll_student">
        <input type ="hidden" name="action" value ="csearch">
        <input type="text" name="csearch">
        <input type="submit" value ="Search Courses">    
    </form><br>
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
        
        <?php foreach ($coursePicked as $cname) : ?>
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
            <input type = "hidden" name="coursePicked" 
                 value="<?php echo htmlspecialchars($cname['courseName']);?>">
            <input type = "submit" value = "Enroll">
            </form>
            </td> 
        </tr>   
        
        <?php endforeach; ?>
    </table><br>
   
</main>

<?php include '../view/footer.php' ?>   
      