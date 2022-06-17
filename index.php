<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>SaCode Eroma</title>
</head>
<body>
    <h2>SaCode</h2>
    <table>
        <tr>

            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Action</td>

        </tr>
        <?php 
        require 'config.php';
        $rows = mysqli_ruery($conn, "SELECT * FROM users");
        $i = 1;
        ?>

        <?php foreach($rows as $row) : ?>
            <tr id= <?php echo $row["id"]; ?>>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>

            <td>
                <a href="edituser.php?id=<?php echo$row["id"]; ?>">Edit</a>
                <button type="button" onclick="submitData(<?php  echo $row['id']; ?>);">Delete</button>
            </td>
            </tr>
        <?php endforeach;  ?>
    </table>
    <a href="adduser.php">Add User</a>
    <?php 'script.php';?>
</body>
</html>