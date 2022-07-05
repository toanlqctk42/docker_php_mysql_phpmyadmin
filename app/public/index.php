<?php
$conn = mysqli_connect('mysql_data','root','root','tutorial');

if($conn->connect_error)
{
    die("connection faild");
}

$sql ="select * from user";

$result = $conn->query($sql);

echo $result->num_rows;

$conn->close();