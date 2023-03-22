<?php
$uname=$_POST["name"];
$clg=$_POST["cn"];
$yr=$_POST["yr"];
$link=mysqli_connect("localhost","root","","yamini");
$sql='SELECT Event_Name FROM cocurricular WHERE Name="'.$uname.'" AND College_Name="'.$clg.'"';
$result=mysqli_query($link,$sql);
while ($row = $result->fetch_assoc()) {
    echo $row['Event_Name']."<br>";
}

?>