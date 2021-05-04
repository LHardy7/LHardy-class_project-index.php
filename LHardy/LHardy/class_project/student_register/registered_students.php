<?php include '../view/header.php'; ?>

<main>
    <h1>Registered Students </h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>  
            <th>&nbsp;</th>           
        </tr>    
        
        <?php foreach ($name as $names) : ?>
        <tr> 
            <td><?php echo htmlspecialchars($names['name']); ?></td>
            <td><?php echo htmlspecialchars($names['gender']); ?></td>
            <td><?php echo htmlspecialchars($names['studentID']); ?></td>
            <td><?php echo htmlspecialchars($names['email']); ?></td>
            <td><?php echo htmlspecialchars($names['password']); ?></td>
            <td>
                <form action = "." method="post">
                    <input type = "hidden" name="action" value="delete_student">
                    <input type = "hidden" name="name" 
                    value="<?php echo htmlspecialchars($names['name']);?>">
                    <input type = "submit" value = "Delete">           
                </form>           
            </td>
        </tr> 
        <?php endforeach; ?>
    </table>
    <p><a href="?action=show_register_form"> Register Student </a></p>
</main>

<?php include '../view/footer.php' ?>   
      