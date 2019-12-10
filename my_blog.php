<?php 


$title='Update messages';
$content='';

require('master.php');
?>

'<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Update Posts</h2>
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
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form action="upload.php" method="post" enctype="multipart/form-data" class="contactform">                  
                   
                   <p class="comment-form-url">
                     <label for="topic">Topic Name<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" name="topic">  
                   </p>
                   <p class="comment-form-url">
                     <label for="description">Description of Topic<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" placeholder="" name="description" maxlength="100">  
                   </p>
                   <p class="message">
                     <label for="content">Content</label>
                     <textarea type="text" required="required" aria-required="true" name="content"></textarea>
                   </p> 
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
<!-- End contact  -->;


