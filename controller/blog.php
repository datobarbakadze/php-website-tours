<?php 
/**
* 
*/
class blog
{
	
	function check_it()
	{
		if(isset($_GET['url'])){
		$url = mysql_real_escape_string($_GET['url']);
		$url = rtrim($url, '/');
		$url = explode('/', $url);
			if(isset($url[0]) && !isset($url[1])){
				$checker=0;
			}elseif (isset($url[1])) {
				$checker = 1;
			}

			return $checker;
		}
	}

}
$blog = new blog();
 ?>


<?php if($blog->check_it() == 0){ ?>
        <!--End of Header Area-->
       
        <!--Banner Area Start-->
        <div class="banner-area blog-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Adventure <span>Blog</span></h1>
                            </div>    
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Blog Post Area Start-->
        <div class="blog-post-area section-padding blog-post-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar-widget">
                            <div class="clearfix"></div>
                            <div class="single-sidebar-widget">
                                <h4>Recent <span>Posts</span></h4>
                                <div class="single-widget-posts">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/3.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | Europe</a></h4>
                                        <p><i class="fa fa-clock-o"></i> May 27, 2015</p>
                                    </div>
                                </div>
                                <div class="single-widget-posts">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/4.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | Nepal</a></h4>
                                        <p><i class="fa fa-clock-o"></i> Aug 09, 2016</p>
                                    </div>
                                </div>
                                <div class="single-widget-posts no-margin">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/5.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | China</a></h4>
                                        <p><i class="fa fa-clock-o"></i> Jun 22, 2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="single-sidebar-widget widget-gallery">
                                <h4>Photo <span>Gallery</span></h4>
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/6.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/7.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/8.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/9.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/10.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/11.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="single-blog-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                     <div class="blog-image">
                                        <a href="#"><img src="/views/img/blog/12.jpg" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 blog-post-margin"> 
                                    <div class="blog-two-text-container"> 
                                        <div class="single-blog-post-text">
                                            <h4><a href="blog-details.html">How's the weather? Best times to travel.....</a></h4>
                                            <div class="author-comments">
                                                <span><i class="fa fa-user"></i>ALICE HINES</span>
                                                <span><i class="fa fa-comment"></i>15 Comments</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus lectus eu mauris maximus, ut dapibus arcu venenatis. Sed augue justo, posuere at orci ut, ultricies vulputate elit. Maecenas volutpat, est vitae condimentum eleifend, nunc eros efficitur erat, quis bibendum orci nisi sit amet nibh.</p>
                                        </div>
                                        <div class="blog-button-links">
                                            <a href="blog-details.html" class="blog-button button-dark">Learn More</a>
                                            <div class="blog-links">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>     
                                </div>    
                            </div>        
                        </div>
                        <div class="single-blog-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                     <div class="blog-image">
                                        <a href="#"><img src="/views/img/blog/13.jpg" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">05</span>
                                            <span class="month">Feb</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 blog-post-margin"> 
                                    <div class="blog-two-text-container"> 
                                        <div class="single-blog-post-text">
                                            <h4><a href="blog-details.html">Sed augue justo, posuere at orci ut.....</a></h4>
                                            <div class="author-comments">
                                                <span><i class="fa fa-user"></i>JHON RUSSEL</span>
                                                <span><i class="fa fa-comment"></i>8 Comments</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus lectus eu mauris maximus, ut dapibus arcu venenatis. , ultricies dimentum eleifend vulputate elit. Maecenas volutpat, est vitae condimentum eleifend, nunc eros efficitur erat, quis bibendum orci nisi sit dapibus arcu venenatis. amet nibh.</p>
                                        </div>
                                        <div class="blog-button-links">
                                            <a href="blog-details.html" class="blog-button button-dark">Learn More</a>
                                            <div class="blog-links">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>     
                                </div>    
                            </div>        
                        </div>
                        <div class="single-blog-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                     <div class="blog-image">
                                        <a href="#"><img src="/views/img/blog/14.jpg" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">26</span>
                                            <span class="month">Sep</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 blog-post-margin"> 
                                    <div class="blog-two-text-container"> 
                                        <div class="single-blog-post-text">
                                            <h4><a href="blog-details.html">In maximus lectus eu mauris maximus.....</a></h4>
                                            <div class="author-comments">
                                                <span><i class="fa fa-user"></i>Nightangle</span>
                                                <span><i class="fa fa-comment"></i>3 Comments</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus lectus eu mauris maximus, ut dapibus arcu venenatis. Sed augue justo, posuere at orci ut, ultricies vulputate elit. Maecenas volutpat, est vitae condimentum eleifend, nunc eros efficitur erat, quis bibendum orci nisi sit amet nibh.</p>
                                        </div>
                                        <div class="blog-button-links">
                                            <a href="blog-details.html" class="blog-button button-dark">Learn More</a>
                                            <div class="blog-links">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>     
                                </div>    
                            </div>        
                        </div>
                        <div class="single-blog-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                     <div class="blog-image">
                                        <a href="#"><img src="/views/img/blog/15.jpg" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">04</span>
                                            <span class="month">Mar</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 blog-post-margin"> 
                                    <div class="blog-two-text-container"> 
                                        <div class="single-blog-post-text">
                                            <h4><a href="blog-details.html">Maecenas volutpat est vita maximus.....</a></h4>
                                            <div class="author-comments">
                                                <span><i class="fa fa-user"></i>KATHIE HINES</span>
                                                <span><i class="fa fa-comment"></i>15 Comments</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus lectus eu mauris maximus, ut dapibus arcu venenatis. Sed augue justo, posuere at orci ut, ultricies vulputate elit. Maecenas volutpat, est vitae condimentum eleifend, nunc eros efficitur erat, quis bibendum orci nisi sit amet nibh.</p>
                                        </div>
                                        <div class="blog-button-links">
                                            <a href="blog-details.html" class="blog-button button-dark">Learn More</a>
                                            <div class="blog-links">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>     
                                </div>    
                            </div>        
                        </div>
                        <div class="single-blog-post">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                     <div class="blog-image">
                                        <a href="#"><img src="/views/img/blog/16.jpg" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 blog-post-margin"> 
                                    <div class="blog-two-text-container"> 
                                        <div class="single-blog-post-text">
                                            <h4><a href="blog-details.html">How's the weather? Best times to travel.....</a></h4>
                                            <div class="author-comments">
                                                <span><i class="fa fa-user"></i>ALICE DOE</span>
                                                <span><i class="fa fa-comment"></i>15 Comments</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus lectus eu mauris maximus, ut dapibus arcu venenatis. Sed augue justo, posuere at orci ut, ultricies vulputate elit. Maecenas volutpat, est vitae condimentum eleifend, nunc eros efficitur erat, quis bibendum orci nisi sit amet nibh.</p>
                                        </div>
                                        <div class="blog-button-links">
                                            <a href="blog-details.html" class="blog-button button-dark">Learn More</a>
                                            <div class="blog-links">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>     
                                </div>    
                            </div>        
                        </div>
                        <div class="clearfix"></div>
                        <div class="pagination-content">
                            <div class="pagination-button">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="current"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
        
<?php }elseif ($blog->check_it()==1) { ?>
		
        <!--Banner Area Start-->
        <div class="banner-area blog-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Adventure <span>Blog</span></h1>
                            </div>    
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Blog Post Area Start-->
        <div class="blog-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar-widget">
                            <div class="clearfix"></div>
                            <div class="single-sidebar-widget">
                                <h4>Recent <span>Posts</span></h4>
                                <div class="single-widget-posts">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/3.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | Europe</a></h4>
                                        <p><i class="fa fa-clock-o"></i> May 27, 2015</p>
                                    </div>
                                </div>
                                <div class="single-widget-posts">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/4.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | Nepal</a></h4>
                                        <p><i class="fa fa-clock-o"></i> Aug 09, 2016</p>
                                    </div>
                                </div>
                                <div class="single-widget-posts no-margin">
                                    <div class="post-img">
                                        <a href="#"><img src="/views/img/blog/5.jpg" alt=""></a>
                                    </div>
                                    <div class="posts-text">
                                        <h4><a href="#">Himalaia Trip | China</a></h4>
                                        <p><i class="fa fa-clock-o"></i> Jun 22, 2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="single-sidebar-widget widget-gallery">
                                <h4>Photo <span>Gallery</span></h4>
                                <div class="row">
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/6.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/7.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/8.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/9.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/10.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-4 col-sm-2 col-xs-4">
                                        <a href="#"><img src="/views/img/blog/11.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="single-blog-post blog-post-details">
                            <div class="single-blog-post-img">
                                <a href="#"><img src="/views/img/blog/large-1.jpg" alt=""></a>
                                <div class="date-time">
                                    <span class="date">10</span>
                                    <span class="month">AUG</span>
                                </div>
                            </div>
                            <div class="single-blog-post-text">
                                <h4>How's the weather? Best times to travel.....</h4>
                                <div class="author-comments">
                                    <span><i class="fa fa-user"></i>ALICE HINES</span>
                                    <span><i class="fa fa-comment"></i>15 Comments</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                                <p class="dark-bold">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown and printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="blog-button-links">
                                <span class="blog-tags">Tags: <a href="#">Store,</a> <a href="#">Women,</a> <a href="#">Dress,</a> <a href="#">Fashion</a></span>
                                <div class="blog-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments">
                            <h4 class="blog-title">User <span>Comments</span></h4>
                            <div class="single-comment">
                                <div class="author-image">
                                    <img src="/views/img/blog/author-1.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Watson</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">45 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                            </div>
                            <div class="single-comment comment-reply">
                                <div class="author-image">
                                    <img src="/views/img/blog/author-2.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Maria</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">8 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="author-image">
                                    <img src="/views/img/blog/author-1.jpg" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="author-info">
                                        <h4><a href="#">Watson</a></h4>
                                        <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                        <span class="comment-time">10 Minutes Ago</span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4 class="blog-title">Leave A <span>Comment</span></h4>
                            <form action="#" method="post" id="comment">
                                <div class="comment-form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="required">name</label>
                                            <input type="text" name="name" value="">
                                            <label class="required">Email</label>
                                            <input type="email" name="email" value="">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="">
                                        </div>
                                        <div class="col-md-7">
                                            <label>Your Comments</label>
                                            <textarea rows="12" name="enquiry"></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" class="comment-btn" value="Submit comment">
                                </div>
                            </form>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
        <!--End of Blog Post Area -->

<?php } ?>












