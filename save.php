<?php
$con=new sqli("localhost","root","","prem");
$sql="insert into students(name,city) values ('{$_POST["name"]}','{$_POST["city"]}'");
if($con->query($sql))
{
    echo "data saved";
}
else{
    echo "data not saved";
}
?>