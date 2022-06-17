<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Add Usurt</title>
</head>
<body>
    <h2>Add Usert</h2>
    <form autocomplate="off" action="" method="post">
        <?php 
        require 'config.php';
        $id $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
        ?>
    <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
    <label for="">Nama</label>
    <input type="text" id="nama" value="<?php echo $rows['name']; ?>"> <br>
    <label for="">Email</label>
    <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
    <label for="">Gender</label>
    <select type="text" id="gender"> <br>

        <option value="Male <?php if($row["gender"] == "Male") echo "selected"; ?>">Male</option>
        <option value="Famale <?php if($row["gender"] == "Famale") echo "seected";>Famale</option>
    </select> <br>
    <button type="button" onclick="submitData('insert');">Edit</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
</body>
</html>