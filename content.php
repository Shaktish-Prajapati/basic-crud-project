<?php 
session_start();
if(isset($_SESSION['email']))
{}
else{
  echo"<script>alert('Login First...') </script>";// confirm
    echo "<script>window.location = 'login.php'</script>";
}
$title='Contents';

$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Content</h2>
          <ol class="breadcrumb">  
           <h3><li class="active"><b>Posts</b></li></h3>
         </ol>
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
         <div class="mu-title">
           <p><strong>Keep your content healthy!</strong></p>
         </div>
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form action="upload.php" method="post" enctype="multipart/form-data" class="contactform">                  
                   <!-- <p class="comment-form-author">
                     <label for="author">Name <span class="required">*</span></label>
                     <input type="text" required="required" size="30" placeholder="Author name" value="" name="author">
                   </p> -->

                   <p class="comment-form-url">
                     <label for="topic">Topic Name<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" name="topic">  
                   </p>
                   <p class="comment-form-url">
                     <label for="description">Description of Topic<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" placeholder="" name="description" maxlength="150">  
                   </p>
                   <p class="summernote">
                     <label for="content">Content</label>
                     <!-- <textarea type="text" id=demo  required="required" aria-required="true" name="content"></textarea> -->
                      <textarea id="summernote" name="content"></textarea>  </p>
                    <script>
                    $(document).ready(function() {
                        $(\'#summernote\').summernote();
                    });
                  </script>
                    
                   <p class="form-submit">
                     <label for="image">Photo for Content</label>
                     <input type="file" name="image" id="imageToUpload">
                   </p>                  
                   <p class="form-submit">
                     <input type="submit" value="Upload data" class="mu-post-btn" name="submit">
                   </p>        
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
