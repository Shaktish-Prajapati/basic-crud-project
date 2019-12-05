<?php 

$title='Contents';

$content='';


include('master.php')

?>
<!-- Page breadcrumb -->
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
           <p><strong>Keep your messages healthy!</strong></p>
         </div>
         <!-- end title -->
         <!-- start contact content -->
         <div class="mu-contact-content">           
           <div class="row">
             <div class="col-md-6">
               <div class="mu-contact-left">
                 <form action="upload.php" method="post" enctype="multipart/form-data" class="contactform">                  
                   <p class="comment-form-author">
                     <label for="author">Name <span class="required">*</span></label>
                     <input type="text" required="required" size="30" placeholder="Author name" value="" name="author">
                   </p>
                   <!-- <p class="comment-form-email">
                     <label for="email">Email <span class="required">*</span></label>
                     <input type="email" required="required" aria-required="true" value="" name="email">
                   </p> -->
                   <p class="comment-form-url">
                     <label for="title">Topic Name<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" name="title">  
                   </p>
                   <p class="comment-form-url">
                     <label for="description">Description of Topic<span class="required">*</span></label>
                     <input type="text" required="required" aria-required="true" placeholder="Max-length is 100 characters" name="description" maxlength='100'>  
                   </p>
                   <p class="comment-form-comment">
                     <label for="message">Message</label>
                     <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                   </p> 
                   <p class="form-submit">
                     <label for="comment">Photo for Content</label>
                     <input type="file" name="fileToUpload" id="fileToUpload">
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
<!-- End contact  -->