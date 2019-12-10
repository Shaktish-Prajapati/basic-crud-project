<?php
// start_session();
$get_content='';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    echo $id;
    require('db-conn.php');
    $query="SELECT * FROM posts WHERE id=".$id;
    $run_query=mysqli_query($conn,$query);
    
    if($run_query)
    {
        while ($data = mysqli_fetch_array($run_query)){
        
        $get_id=$data['id'];
        $get_user_post=$data['user_post'];
        $get_author=$data['author'];
        $get_topic_name= $data['topic_name'];
        $get_description=$data['description'];
        $get_content=$data['content'];
        $get_date_time=$data['date_time'];
        $get_image_src=$data['image_src'];

        $get_content='<div class="col-md-12">
        <article class="mu-blog-single-item">
          <figure class="mu-blog-single-img">
            <a href="#"><img alt="img" src="'.$get_image_src.'"></a>
            <figcaption class="mu-blog-caption">
              <h3><a href="#">'.$get_topic_name.'</a></h3>
            </figcaption>                      
          </figure>
          <div class="mu-blog-meta">
            <a href="#">'.$get_author.'</a>
            <a href="#">'.$get_date_time.'</a>
            <span><i class="fa fa-comments-o"></i>87</span>
          </div>
          <div class="mu-blog-description">
            <p>'.$get_description.' </p><br>
            <p>'.$get_content.' </p>
            
            
          </div>
          <!-- start blog post tags -->
          <div class="mu-blog-tags">
            <ul class="mu-news-single-tagnav">
              <li>TAGS :</li>
              <li><a href="#">Science,</a></li>
              <li><a href="#">English,</a></li>
              <li><a href="#">Sports,</a></li>
              <li><a href="#">Health</a></li>
            </ul>
          </div>
          <!-- End blog post tags -->
          <!-- start blog social share -->
          <div class="mu-blog-social">
            <ul class="mu-news-social-nav">
              <li>SOCIAL SHARE :</li>
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>
          </div>
          <!-- End blog social share -->
        </article>
      </div>    ';
        }
    }
    else{
        header('Location:blog-archive.php');
    }


}
$title='Read-blog';
$content='<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Complete Blog</h2>
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
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                        '.$get_content.'
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start blog navigation -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-single-navigation">
                      <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>
                      <a class="mu-blog-next" href="#">Next<span class="fa fa-angle-right"></span></a>
                    </div>
                  </div>
                </div>
                <!-- end blog navigation -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                      <h3>Related News</h3>
                      <div class="mu-related-item-area">
                        <div id="mu-related-item-slide">
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#">By Admin</a>
                                <a href="#">02 June 2016</a>
                                <span><i class="fa fa-comments-o"></i>87</span>
                              </div>
                              <div class="mu-blog-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-2.jpg"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#">By Admin</a>
                                <a href="#">02 June 2016</a>
                                <span><i class="fa fa-comments-o"></i>87</span>
                              </div>
                              <div class="mu-blog-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                           <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-3.jpg"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#">By Admin</a>
                                <a href="#">02 June 2016</a>
                                <span><i class="fa fa-comments-o"></i>87</span>
                              </div>
                              <div class="mu-blog-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                          <div class="col-md-6">
                            <article class="mu-blog-single-item">
                              <figure class="mu-blog-single-img">
                                <a href="#"><img alt="img" src="assets/img/blog/blog-1.jpg"></a>
                                <figcaption class="mu-blog-caption">
                                  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                </figcaption>                      
                              </figure>
                              <div class="mu-blog-meta">
                                <a href="#">By Admin</a>
                                <a href="#">02 June 2016</a>
                                <span><i class="fa fa-comments-o"></i>87</span>
                              </div>
                              <div class="mu-blog-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                <a href="#" class="mu-read-more-btn">Read More</a>
                              </div>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end start related course item -->
                <!-- start blog comment -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
                      <h3>5 Comments</h3>
                      <div class="comments">
                        <ul class="commentlist">
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">David Muller</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "-------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">John Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "------------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                          <ul class="children">
                            <li class="author-comments">
                              <div class="media">
                                <div class="media-left">    
                                  <img alt="img" src="assets/img/testimonial-3.png" class="media-object news-img">
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Admin</h4>
                                 <span class="comments-date"> Posted on 12th June, 2016</span>
                                 <span class="author-tag">Author</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "-------Content here, content here", making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                              </div>
                            </li>
                            <ul class="children">
                              <li>
                                <div class="media">
                                  <div class="media-left">    
                                    <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                                  </div>
                                  <div class="media-body">
                                   <h4 class="author-name">David Muller</h4>
                                   <span class="comments-date"> Posted on 12th June, 2016</span>
                                   <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "--------------Content here, content here", making it look like readable English</p>
                                   <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </ul>
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                <img alt="img" src="assets/img/testimonial-2.png" class="media-object news-img">
                              </div>
                              <div class="media-body">
                               <h4 class="author-name">Jhon Doe</h4>
                               <span class="comments-date"> Posted on 12th June, 2016</span>
                               <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "----------Content here, content here", making it look like readable English</p>
                               <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <!-- comments pagination -->
                        <nav>
                          <ul class="pagination comments-pagination">
                            <li>
                              <a aria-label="Previous" href="#">
                                <span class="fa fa-long-arrow-left"></span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a aria-label="Next" href="#">
                                <span class="fa fa-long-arrow-right"></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end blog comment -->
                <!-- start respond form -->
                <div class="row">
                  <div class="col-md-12">
                    <div id="respond">
                      <h3 class="reply-title">Leave a Comment</h3>
                      <form id="commentform">
                        <p class="comment-notes">
                          Your email address will not be published. Required fields are marked <span class="required">*</span>
                        </p>
                        <p class="comment-form-author">
                          <label for="author">Name <span class="required">*</span></label>
                          <input type="text" required="required" size="30" value="" name="author">
                        </p>
                        <p class="comment-form-email">
                          <label for="email">Email <span class="required">*</span></label>
                          <input type="email" required="required" aria-required="true" value="" name="email">
                        </p>
                        <p class="comment-form-url">
                          <label for="url">Website</label>
                          <input type="url" value="" name="url">
                        </p>
                        <p class="comment-form-comment">
                          <label for="comment">Comment</label>
                          <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                        </p>
                        <p class="form-allowed-tags">
                          You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                        </p>
                        <p class="form-submit">
                          <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
                        </p>        
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end respond form -->
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
                    <h3>Popular News</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Medical Science</a></h4>                      
                          <span class="popular-course-price">$200.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">$250.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Health & Sports</a></h4>                      
                          <span class="popular-course-price">$90.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
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
 </section>';

require('master.php');

?>


