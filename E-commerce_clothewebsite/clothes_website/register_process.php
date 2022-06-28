<?php

require("connect.php");
// print_r($_POST);
if (isset($_POST['submit'])){ 

    $fir_name = $_POST['ffname'];
    $last_name = $_POST['lname'];
    $password = $_POST['password'];
    $gender = $_POST['sex'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $is_deleted = $_POST['isD'];

$insert = "INSERT INTO tbl_users2 (first_name,last_name,email,password,gender,role,is_deleted)
 VALUES('$fir_name','$last_name,'$email','$password','$gender','$role',$is_deleted)";
mysqli_query($conn, $insert);
if (mysqli_connect_errno()) {
    printf("DB error: %s", mysqli_connect_error());
    exit();

}
// echo mysqli_error($conn);
};

// echo  $insert_data;
// echo $error;
?>