<?php
    $conn = mysqli_connect('mysql_data','root','root','tutorial');

if($conn->connect_error)
{
    die("connection faild");
}

// $query = "Call proc_insert_user(N'hello world')";
// $query = "delete from user where username = 'trollteam'";
// $conn->query($query);

$sql ="select * from user";

$results = $conn->query($sql);

while($datarow = $results->fetch_row())
{
    echo "ID   : ".$datarow[0]."||";
    echo "Name : ".$datarow[1]."<br>";
}

$conn->close();