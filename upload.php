<?php 
session_start();
if(isset($_SESSION['email']))
{
    require('db-conn.php');
}
else{
    echo"<script>alert('Trying to access unauthorized Page') </script>";// confirm
    echo "<script>window.location = 'index.php'</script>";  // redirecting using script code
}
if(isset($_POST['submit']))
{   date_default_timezone_set('Asia/Calcutta'); 
    $user_post=$_SESSION['email'];  // for username as email bcz email is unique for each user
    $dateTime=date("d-M-Y h:i:s A"); // for date and time
    $author=$_POST['author'];    
    $topicName=$_POST['topic'];
    $description=$_POST['description'];
    $content=$_POST['content'];


    //image handler
                    $fileType= $_FILES["image"]["type"];

                if(($fileType == "image/gif") ||
                    ($fileType == "image/jgp") ||
                    ($fileType == "image/jpeg") ||
                    ($fileType == "image/png") )
                {
                    //check if file exixts
                    if(file_exists("postimages/".$_FILES["image"]["type"]))
                    {
                        //if file already exist
                        echo "File already exists!";
                    }
                    else
                    {

                        move_uploaded_file($_FILES["image"]["tmp_name"], "postimages/".$_FILES["image"]["name"]);

                        //you can also use script
                        echo "Uploaded in postimages/".$_FILES["image"]["name"];
                        
                    }   
                }

             // to access the name of file $_FILES["image"]["name"];
    $image='postimages/'.$_FILES["image"]["name"];;
    

    $query="INSERT INTO `posts`( `user_post`, `author`, `topic_name`, `description`,`content`,`date_time`,`image_src`) values('$user_post','$author', '$topicName', '$description','$content','$dateTime','$image')";
    $run_query=mysqli_query($conn,$query);
    if(isset($run_query)){

        echo"<script>alert('Uploading of Content Done...') </script>";
        mysqli_close($conn);
        echo "<script>window.location = 'index.php'</script>";
    }
    else{
        echo"<script>alert('Uploading of Content Failed...') </script>";
        echo mysqli_error($conn);
        mysqli_close($conn);
        echo "<script>window.location = 'index.php'</script>";
    }
    
}



?>