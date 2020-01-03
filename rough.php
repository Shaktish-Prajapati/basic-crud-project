$content=' <!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Blog Archive</h2>
          <ol class="breadcrumb">           
           <li class="active">Blog Archive</li>
         </ol>
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
                 <div class="row">'
                 '<!-- Artical start  -->
                   <div class="col-md-6 col-sm-6">
                     <article class="mu-blog-single-item">
                       <figure class="mu-blog-single-img">
                         <a href="#"><img src="'.$image_src.'" alt="img"></a>
                         <figcaption class="mu-blog-caption">
                           <h3><a href="#">'.$topic_name.'</a></h3>
                         </figcaption>                      
                       </figure>
                       <div class="mu-blog-meta">
                         <a href="#">"BY: "'.$author.'</a>
                         <a href="#">'.$date_time.'</a>
                         <span><i class="fa fa-comments-o"></i>87</span>
                       </div>
                       <div class="mu-blog-description">
                         <p>'.$description.'</p>
                         <a class="mu-read-more-btn" href="#">Read More</a>
                       </div>
                     </article> 
                   </div> '.
                   $num_rows=$num_rows-1;
                 }..while($num_rows!=0){
                     
                     .
                   
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





style="width:750px;height:500px;
<!-- bootstrap include code -->



<!-- <textarea type="text" id=demo  required="required" aria-required="true" name="content"></textarea> -->



<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>


-------------------------------------------------------------------------------------------------------------------------------
   // pagination
   
<?php
session_start();
$result_per_page=2;
require('db-conn.php');
$query="SELECT * FROM discuss_forum";
$run_query=mysqli_query($conn,$query);
$no_of_rows=mysqli_num_rows($run_query);

$no_of_pages=ceil($no_of_rows/$result_per_page);

if(!isset($_GET['page']))
{
    $page=1;
}
else {
     $page = $_GET['page'];
}

$this_page_result=($page-1)*$result_per_page;
// sql

for($page=1;$page<=$no_of_pages;$page++)
{
    echo '<a href="pagination.php?page='.$page.' "> '.$page.'</a>';
}

?>