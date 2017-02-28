<?php




$conn = mysqli_connect("localhost", "Team6", "te8AJUJZ")
    or die ("couldn't connect! Error:" . mysqli_error($conn));
mysqli_select_db($conn , 'Team6') or die ('Database will not open');









?>