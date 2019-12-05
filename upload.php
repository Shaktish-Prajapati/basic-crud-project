<?php 
session_start();
if(isset($_SESSION['email']))
{
    require('db-conn.php');
}
else{
    echo"<script>confirm('Please Login first you are being redirecting to Login page...') </script>";
    echo "<script>window.location = 'login.php'</script>";  // redirecting using script code
}
if(isset($_POST['submit']) && $_POST['submit']=='submit')
{
    $user_post=$_SESSION['email'];  // for username as email bcz email is unique for each user
    $dateTime=date("d-M-Y h:i:s A"); // for date and time
    $author=$_POST['author'];    
    $topicName=$_POST['topic'];
    $description=$_POST['description'];
    $message=$_POST['message'];
    $contentImage=$_POST['image'];

}



?>