<?php
session_start();

require('db-conn.php');

$query = "SELECT * FROM posts ORDER BY id DESC";

if ($run_query = mysqli_query($conn, $query)) {
  // Fetch one and one row
  $num_rows=mysqli_num_rows($run_query);
  // echo$num_rows;
  $t='';
  while ($row = mysqli_fetch_array($run_query)) {
     $id=         $row['id']; 
     $user_post=  $row['user_post'];
     $author=     $row['author'];
     $topic_name= $row['topic_name'];
     $description=$row['description'];
     $content=    $row['content'];
     $date_time=  $row['date_time'];
     $image_src=  $row['image_src'];
     
    //  $num_rows=$num_rows-1;
     $t.='<!-- Artical start  -->
     <div class="col-md-6 col-sm-6">
       <article class="mu-blog-single-item">
         <figure class="mu-blog-single-img">
           <a href="#"><img src="'.$image_src.'" alt="img" style="width:350.px;height:200px;></a>
           <figcaption class="mu-blog-caption">
             <h3><a href="#">'.$topic_name.'</a></h3>
           </figcaption>                      
         </figure>
         <div class="mu-blog-meta">
           <a href="#">BY: '.$author.'</a>
           <a href="#"> Posted on: '.$date_time.'</a>
           <span><i class="fa fa-comments-o"></i>87</span>
         </div>
         <div class="mu-blog-description">
           <p>'.$description.'</p>
           <a class="btn btn-default" href=blog-single.php?id='.$id.'>Read More</a>
         </div>
       </article> 
     </div> ';
     
  }
  // mysqli_free_result($run_query);
}
else{
  echo"<script>alert('Sql execution failed due to some technical fault...') </script>";
  mysqli_close($conn);
  echo "<script>window.location = 'index.php'</script>";

}


$title='blog-archive|collection of Blogs';
$content=' <!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Blog Archive</h2>
          
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
             <div class="col-md-9">
               <!-- start course content container -->
               <div class="mu-course-container mu-blog-archive">
                 <div class="row">'.$t.
                 '<!-- Artical ends -->
                 </div>
               </div>
               <!-- end course content container -->
               <!-- start course pagination -->
               <div class="mu-pagination">
                 <nav>
                   <ul class="pagination">
                     <li>
                       <a href="#" aria-label="Previous">
                         <span class="fa fa-angle-left"></span> Prev 
                       </a>
                     </li>
                     <li class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li>
                       <a href="#" aria-label="Next">
                        Next <span class="fa fa-angle-right"></span>
                       </a>
                     </li>
                   </ul>
                 </nav>
               </div>
               <!-- end course pagination -->
             </div>
             <div class="col-md-3">
               <!-- start sidebar -->
               <aside class="mu-sidebar">
                 <!-- start single sidebar -->
                 <div class="mu-single-sidebar">
                   <h3>Categories</h3>
                   <ul class="mu-sidebar-catg">
                     <li><a href="#">Web Design</a></li>
                     <li><a href="">Web Development</a></li>
                     <li><a href="">Math</a></li>
                     <li><a href="">Physics</a></li>
                     <li><a href="">Camestry</a></li>
                     <li><a href="">English</a></li>
                   </ul>
                 </div>
                 <!-- end single sidebar -->
                 
                 <!-- start single sidebar -->
                 <div class="mu-single-sidebar">
                   <h3>Tags Cloud</h3>
                   <div class="tag-cloud">
                     <a href="#">Health</a>
                     <a href="#">Science</a>
                     <a href="#">Sports</a>
                     <a href="#">Mathematics</a>
                     <a href="#">Web Design</a>
                     <a href="#">Admission</a>
                     <a href="#">History</a>
                     <a href="#">Environment</a>
                   </div>
                 </div>
                 <!-- end single sidebar -->
               </aside>
               <!-- / end sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> ';



include('master.php');
?>

