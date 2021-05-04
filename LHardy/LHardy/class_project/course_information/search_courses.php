<?php include '../view/header.php'; ?>

<main>
    <h2>Search</h2>

        <form action="index.php" method="post">
            <input type="hidden" name="action" value="csearch">
            <label>Search Course: </label>
            <input type="text" name="scourse">
            <input type="submit" value="Search"><br>
        </form>
        
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
            <?php foreach ($courseSearch as $search) : ?>
            <tr>
                <td><?php echo $search['courseID']; ?></td>
                <td><?php echo $search['courseName']; ?></td>
                <td><?php echo $search['semester']; ?></td>
                <td><?php echo $search['instructor']; ?></td>
                <td><?php echo $search['classroom']; ?></td>
                <td><?php echo $search['time']; ?></td>                         
            </tr>
            <?php endforeach; ?>
        </table>      
   
</main>
<?php include '../view/footer.php' ?>  