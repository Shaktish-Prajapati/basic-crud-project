<?php 
session_start();
if(isset($_SESSION['email']))
{
    header('Location:index.php');
}

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    require('db-conn.php');
    $query="SELECT * from users where email='$email' and password= '$password'";
    $run_query=mysqli_query($conn,$query);
    $row = mysqli_fetch_array($run_query);
    $active_user = $row['name'];
    $count = mysqli_num_rows($run_query);
  //  echo $count;
   
    if($count == 1) {

     $_SESSION['email'] = $email;
     $_SESSION['name']=$active_user;
    //  echo"<script>alert('Logged in...') </script>";
       header("location: index.php");
   }
   else{
    echo"<script>alert('check your credentials') </script>";
    // form.php?name1=value1
       
   }
    
}

$title='Login';
$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2 >Login</h2>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">
         <!-- start title -->
         
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form method="post" class="contactform">                  
                   
                   <p class="comment-form-email">
                     <label for="email">Email <span class="required">*</span></label>
                     <input type="email" required="required" aria-required="true" placeholder="yourname@example.com"  value="" name="email">
                   </p>
                                      
                   <p class="comment-form-email">
                     <label for="password">Password <span class="required">*</span></label>
                     <input type="password" required="required" aria-required="true" placeholder="Max-Length 15" maxlength="15" value="" name="password">
                   </p>    
                              
                   <p class="form-submit">
                     <input class="btn btn-danger" type="submit" value="Submit" class="mu-post-btn" name="submit">
                   </p>        
                 </form>
               </div>
             </div>
             <div class="col-md-6">
               <div class="mu-contact-right">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d6249.345033302234!2d-80.02791918555701!3d40.45935344513505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8834f411a7b748bd%3A0xaec8197db3de9a9e!2sCalifornia-Kirkbride%2C+Pittsburgh%2C+PA%2C+USA!3m2!1d40.4600435!2d-80.0213538!5e0!3m2!1sen!2sbd!4v1464270878470" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
             </div>
           </div>
         </div>
         <!-- end contact content -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End contact  -->';

include('master.php')
?>