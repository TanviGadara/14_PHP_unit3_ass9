<?php
$con = mysqli_connect("localhost","root","","mydb");
$query = "SELECT * FROM Student";
$res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
if ($res) {
    while ($row = mysqli_fetch_row($res)) {
    print("ID: ".$row[0]."<br>");
    print("NAme: ".$row[1]."<br>");
    }
    }
    mysqli_close($con);
    ?>