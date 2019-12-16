<?php

session_start();
if(isset($_GET['id']))
{
    require('db-conn.php');
    $id=$_GET['id'];
    $query="DELETE FROM posts WHERE id=".$id;
    $run_query=mysqli_query($conn,$query);
    if($run_query)
    {
        echo "<script>window.location = 'blog-single.php'</script>";
    }

}
else{
    echo"<script>alert('Some technical error occured! or You are trying to access unauthorized page!')</script>";// confirm
    echo "<script>window.location = 'blog-archive.php'</script>";
}



?>