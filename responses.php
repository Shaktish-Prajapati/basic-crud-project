<?php 
session_start();
if(isset($_SESSION['email']))
{
    // $name=$_SESSION['name'];
    require('db-conn.php');
    $query="SELECT * FROM discuss_forum";
    $run_query=mysqli_query($conn,$query);
    $row=mysqli_num_rows($run_query);
    $data='';
    while ($row = mysqli_fetch_array($run_query))
    {
        $id=$row['id'];
        $name=$row['name'];
        $question=$row['question'];
        $posted_on=$row['posted_on'];
        $category=$row['category'];
        $status=$row['reply_status'];

        $data=$data.'<tr>
                    <td>'.$question.'</td>
                    <td>'.$name.'</br>'.$posted_on.'</td>
                    
                   
                        <td><div class="mu-blog-description">
                            <a class="btn btn-primary" href=blog-single.php?id='.$id.'>Reply</a>
                            </div>
                        </td>
                    </tr>';

    }
    mysqli_close($conn);
}
else{
  echo"<script>alert('You need to Login First...') </script>";
  
  echo "<script>window.location = 'login.php'</script>";

}

$title='Responses';
$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Responses</h2>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                  <style>
                    table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    tr:nth-child(even) {
                    background-color: #dddddd;
                    }
                    </style>
                    <table class="danger">
                    <!-- Table headings -->
                    <tr  class="alert alert-dark">
                        <th width="600px" wrap="hard" >Questions</th>
                        <th width="100px">Replied By & Date</th>
                        <th width="50px">Responses</th>
                        
                        
                    </tr>
                    <!-- Table Data Field -->
                    <tr>
                        <td>this is an question field </td>
                        <td>Maria Anders </br> 10-06-19</td>
                        
                        <td><div class="mu-blog-description">
                            <a class="btn btn-primary" href=blog-single.php?id="">Reply</a>
                            </div>
                        </td>
                    </tr>'
                    .$data.
                    '</table>

                  </div>
                </div>
                <!-- end course content container -->
                <!-- start blog navigation -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>
                      <a class="mu-blog-next"  href="#">Next<span class="fa fa-angle-right"></span></a>
                    </div>
                  </div>
                </div>
                <!-- end blog navigation -->
                
                <!-- start respond form -->
                <div class="row">
                  <div class="col-md-12">
                    <div id="respond">
                      <h3 class="reply-title">Post Your Questions<br></h3>

                      
                      <form action="upload_question.php" method="post" id="commentform" enctype="multipart/form-data" >
                      
      
                      <select class="btn btn-success" id="que_category" name="que_category" required class="browser-default custom-select custom-select-lg mb-3" >
                        <option value="">Your Question\'s Category</option>
                        <option value="gst">GST</option>
                        <option value="cgst">CGST</option>
                        <option value="sgts">SGST</option>
                        <option value="igst">IGST/UTGST</option>
                        <option value="vat">VAT</option>
                        <option value="other">Other</option>
                        </select>

                        <p class="comment-form-comment">
                        <br>
                          <textarea id="summernote" required name="forum_question" aria-required="true" rows="25" cols="45" name="question"></textarea> 
                          <script>
                          $(document).ready(function() {
                              $(\'#summernote\').summernote({
                                placeholder: "Hello! You can adjust editor height",
                                toolbar: [
                                  ["style", ["style"]],
                                  ["font", ["bold", "underline", "clear"]],
                                  ["fontname", ["fontname"]],
                                  ["color", ["color"]],
                                  ["para", ["ul", "ol", "paragraph"]],
                                  ["table", ["table"]],
                                  ["insert", ["link"]],
                                  ["view", ["fullscreen"]],
                                ],
                                  tabsize: 2,
                                  height: 200
                              });
                          });
                        </script>
                        </p>
                        <p class="form-submit">
                          <input type="submit" value="Submit Query" class="btn btn-primary" name="submit" >
                        </p>        
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end respond form -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>';

include('master.php')
?>


