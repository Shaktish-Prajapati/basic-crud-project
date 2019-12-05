<?php

$localhost='localhost';
$username='root';
$pwd='';
$db_name='varsity';
$conn=mysqli_connect($localhost,$username,$pwd,$db_name);
if(!$conn)
{
    echo mysqli_error($conn);
}
?>