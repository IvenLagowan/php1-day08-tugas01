<?php 
    require 'config.php';

    if(isset($_POST["action"])){
        if($_POST["action"] == "insert"){
            insert();
        }
        else if($_POST["action"] == "edit"){
        edit();
    }
    else {
        delete();
    }
}

    function insert(){
        global $conn;

        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender= $_POST["gender"];

        $query = "INSERT INFO users VALUES('', '$name', '$email', '$gender')";
        mysqli_query($conn, $query);
        echo "Inserted Successfully";
    }
    function edit(){
        global $conn;

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender= $_POST["gender"];

        $query = "UPDATE users SET name '$name', email', gende = '$gender' WHERE id = $id";
        mysqli_query($conn, $query);
        echo "Update Successfully";
    }
    function delete(){
        global $conn;

        $id = $_POST["action"];

        $query = "DELETE RFOM users WHERE id = $id";
        mysqli_query($conn, $query);
        echo "Delete Successfully";

    }
?>