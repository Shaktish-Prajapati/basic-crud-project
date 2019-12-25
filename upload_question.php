<?php 
session_start();
if(isset($_SESSION['email']))
{
    
}
else{
    echo"<script>alert('Trying to access unauthorized Page') </script>"; // confirm
    echo "<script>window.location = 'index.php'</script>";
}
if(isset($_POST['submit']))
{
    require('db-conn.php');
    $date=date("d-m-y");
    $name=$_SESSION['name'];
    $question=$_POST['forum_question'];
    $email=$_SESSION['email'];
    $category=$_POST['que_category'];
    $query="INSERT INTO discuss_forum(email,name,question,posted_on,category) VALUES('$email','$name','$question','$date','$category')";
    $run_query=mysqli_query($conn,$query);
    // echo mysqli_error($conn); 
    if(isset($run_query))
    {
        mysqli_close($conn);
        echo "<script>window.location ='forum.php'</script>";
    }
    else{
        echo "failed".mysqli_error($conn); 
    }
    // mysqli_close($conn);
    // echo "<script>window.location ='forum.php'</script>";
    // echo $date.$email.$name.$category.$question;
}

?>
