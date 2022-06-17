<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Add Usurt</title>
</head>
<body>
    <h2>Add Usert</h2>
    <form autocomplate="off" action="" method="post">
    <label for="">Nama</label>
    <input type="text" id="nama" value=""> <br>
    <label for="">Email</label>
    <input type="text" id="email" value=""> <br>
    <label for="">Gender</label>
    <select type="text" id="gender"> <br>

        <option value="Male">Male</option>
        <option value="Famale">Famale</option>
    </select> <br>
    <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
</body>
</html>