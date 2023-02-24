<?php

include 'db.php';


$all_data = mysqli_query($db_con, "SELECT * FROM `users`");

foreach ($all_data as $key => $value) {
    echo $value['username'];
    echo '<br>';
}


?>