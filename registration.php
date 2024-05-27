<?php
    session_start();
    include 'header.php';
    include 'db.php';

?>

<?php
    
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `personal`(`email`, `password`) VALUES ('$email','$password')";
        $run = mysqli_query($conn, $query);
        if($run){
            $_SESSION['user_login'] = 1;
            $_SESSION['user'] = $user;
            echo "<script>alert('You are Registered Successfully');window.location.href='index.php';</script>";
        }
        else{
            echo "<script>alert('Sorry Something went Wrong');window.location.href='admin_register.php';</script>";
        }
    }

?>

<?php
    
    include 'ft.php';

?>