<?php
    
    include 'header.php';
    include 'db.php';

?>

<?php

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $email = $_GET['email'];
        $pass = $_GET['password'];

        if(isset($_POST['update'])) {
            $emails = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $query = "UPDATE `personal` SET `email`= '$emails' , `password` = '$password' WHERE id = $id";

            $run = mysqli_query($conn, $query);

            if($run) {
                echo "<script>alert('Your Account has been Updated Successfully');window.location.href='admins.php';</script>";
            }
            else {
                echo "<script>alert('Sorry. Error: " . mysqli_error($conn) . "');</script>";
            }
        }
    }
    else {
        header("location: admins.php");
    }
?>  

<div class="container my-4">
    <h1><center><b><i><ins>Edit for <?php echo $email; ?></ins></i></b></center></h1>
    <div class="head my-3">
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $pass; ?>" id="password">
            </div>
            <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>