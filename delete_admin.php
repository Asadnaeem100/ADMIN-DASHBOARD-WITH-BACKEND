<?php
    
    include 'db.php';
    
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        // Write query to get a 
        $query = "DELETE FROM `personal` WHERE id = $id";
        $run = mysqli_query($conn, $query);
        if($run){
            echo "<script>alert('Your Accoount has been Removed Successfully');window.location.href='admins.php';</script>";
        }
        else{
            echo "NO WAY";
        }
    }

?>