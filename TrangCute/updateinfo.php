<?php 
session_start();
include "connectdb.php";

if (isset($_POST['country']) && isset($_POST['gender'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    
    $id = $_SESSION['id'];
    $country = validate($_POST['country']);
    $gender = validate($_POST['gender']);
    
    
    $sql = "UPDATE users SET country='$country' WHERE id=$id";
    $sql2 = "UPDATE users SET gender='$gender' WHERE id=$id";
    
    if ($conn->query($sql) == TRUE && $conn->query($sql2) == TRUE) {
        header("Location: profile.php?success=Updated success");
        exit();
    }
    else {
        echo "Error " .$conn->error;
    }
}
?>