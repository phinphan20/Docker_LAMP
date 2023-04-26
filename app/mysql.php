<?php
$conn = mysqli_connect("mysql", "root", "testpwd", "beta");
/* if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} */
mysqli_set_charset($conn, "utf8");
putenv("TZ=US/Eastern");
date_default_timezone_set('America/New_York');

$result_mem = mysqli_query($conn, "SELECT * FROM beta_tbl where id = '1'");
$myrow_mem = mysqli_fetch_assoc($result_mem);
echo "Name ".$myrow_mem['first_name'];
?>