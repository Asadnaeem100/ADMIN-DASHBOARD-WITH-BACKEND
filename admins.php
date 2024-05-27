<?php
    
    include 'header.php';
    include 'db.php';

?>

<!-- Make Table for Fetching Data -->
<!-- Table Start -->

<div class="container my-5">
<h1><b><center><ins><i>Registered Admins</ins></ins></center></b></h1>
    <div class="head my-5">
    <table class="table table-dark table-striped" style="border-radius: 20px;">
        <thead>
            <tr>
                <th scope="col">I.D</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">CRUD</th>
            </tr>
        </thead>
        <?php
            
            $query = "SELECT * FROM `personal`";
            $run = mysqli_query($conn, $query);
            if($run){
                while($row = mysqli_fetch_assoc($run)){
                    $id = 0;
                    $id = $id + 1;
                    // echo $row['id'];
                    ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo "Hashed"; ?></td>
                <td>
                    <a href="edit_admin.php?id=<?php echo $id; ?> &email=<?php echo $row['email']; ?> &password=<?php echo $row['password']; ?>" 
                    class="btn btn-secondary">
                    Edit</a> 
                    &nbsp; 
                    <a href="delete_admin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
                }
            }
        
        ?>
    </table>
    </div>
</div>

<!-- Table End -->

<?php
    
    include 'ft.php';

?>