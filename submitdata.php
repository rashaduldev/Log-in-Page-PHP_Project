<?php

include 'db.php';

    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $number = $_POST['number'];

    $query = mysqli_query($db_con, "INSERT INTO `users`( `username`, `password`, `number`) VALUES ('$user', '$pass', '$number')");

?>


<?php 

    if($query){
        ?>

        <script>
            window.location.href = 'success.php';
        </script>

        <?php
    }
?>