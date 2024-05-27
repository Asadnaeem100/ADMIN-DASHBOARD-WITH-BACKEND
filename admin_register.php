<?php
    
    include 'header.php';
    include 'db.php';

?>

<div class="container my-4">
<h1><center><b><i><ins>Registration for Admin</ins></i></b></center></h1>
    <div class="head my-3">
    <form action="registration.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
    
    include 'ft.php';

?>