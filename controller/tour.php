<?php 
/**
* 
*/
class tour
{
	
    public function check_it()
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

    public function get_tour(){

    }

}
$tour = new tour();
 ?>
<?php if($tour->check_it() == 0){ ?>
        <!--Banner Area Start-->
        <div class="banner-area grid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Adventure <span>Listing</span></h1>
                            </div>    
                            <p class="text-white">Three Columns Grid View Adventure Listing</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>TOURS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Adventures Grid Start-->
        <div class="adventures-grid section-padding">
            <div class="container">
                <div class="row">
                    <h1 >TOURS</h1>
                    <div class="clearfix"></div> 
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/1.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Adventure Trip | <span>Europe</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>5 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Basic</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$659</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/2.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Refreshment Trip | <span>India</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>4 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Basic</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$408</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/3.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Cycling | <span>Nepal</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>7 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Advance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$970</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/4.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Family Trip | <span>Bangladesh</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>3 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Basic</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$350</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/5.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Adventure Trip | <span>Aeoli Islands</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>10 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Advance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$950</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/6.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Arts and Culture | <span>Egypt</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>6 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Basic</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$568</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/7.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Adventure | <span>Everest Camp</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>30 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Advance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$999</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/8.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Road Trip | <span>Ireland</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>15 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Advance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$852</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-adventure">
                            <a href="#"><img src="/views/img/adventure-list/9.jpg" alt=""></a>
                            <div class="adventure-text effect-bottom">
                                <div class="transparent-overlay">
                                    <h4><a href="#">Adventure | <span>Australia</span></a></h4>
                                    <span class="trip-time"><i class="fa fa-clock-o"></i>10 Day Trip</span>
                                    <span class="trip-level"><i class="fa fa-send-o"></i>Level: Advance</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                                </div>
                                <div class="adventure-price-link">
                                    <span class="trip-price">$378</span>
                                    <span class="trip-person">Per Person</span>
                                    <div class="adventure-link">
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
                <div class="row">
                    <div class="col-md-12">
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
        <!--End of Adventures Grid-->


<?php }elseif ($tour->check_it()==1) { ?>
        
        <!--Banner Area Start-->
        <div class="banner-area details-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Experience <span>Nepal</span></h1>
                            </div>    
                            <p class="text-white">The right tour for the right traveller</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>TOUR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Area-->
        <!--Adventures Menu Start-->
        <div style="width:100%;height:100px;"></div>
        <!--End of Adventures Menu-->
        <!--Trip Information Start-->
        <div class="trip-information">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="trip-info-left-text">
                            <div class="section-title text-center">
                                <div class="title-border">
                                    <h1>Trip <span>Overview</span></h1>
                                </div>   
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>   
                            </div>  
                            <div class="clearfix"></div>
                            <ul class="details-info">
                                <li class=""><span>Start</span>Kathmandu, Nepal</li>
                                <li class=""><span>Ages</span>MIN 16</li>
                                <li class=""><span>Finish</span>Kathmandu, Nepal</li>
                                <li class=""><span>Group size</span>Min 1, Max 12</li>
                                <li class=""><span>Countries</span>Nepal</li>
                            </ul>
                            <div class="details-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="trip-booking-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Activities</h2>
                                    <div class="single-trip-content">
                                        <div class="trip-icon">
                                            <img src="/views/img/icon/41.png" alt="">
                                        </div>
                                        <h4>Camping</h4>
                                    </div> 
                                    <div class="single-trip-content">
                                        <div class="trip-icon">
                                            <img src="/views/img/icon/42.png" alt="">
                                        </div>
                                        <h4>Hiking</h4>
                                    </div> 
                                    <div class="single-trip-content">
                                        <div class="trip-icon">
                                            <img src="/views/img/icon/43.png" alt="">
                                        </div>
                                        <h4>Camping</h4>
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <h2>Activity Level</h2>
                                    <div class="trip-level-content">
                                        <img src="/views/img/icon/level1.png" alt="">
                                        <h4>Easy</h4>
                                    </div>
                                    <div class="trip-level-content">
                                        <img src="/views/img/icon/level2.png" alt="">
                                        <h4>Medium</h4>
                                    </div>
                                    <div class="trip-level-content">
                                        <img src="/views/img/icon/level3.png" alt="">
                                        <h4>hard</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row divider"></div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="trip-text-container">
                                        <h2>Rating</h2>
                                        <div class="trip-rating">
                                            <i class="fa fa-star grey"></i>
                                            <i class="fa fa-star grey"></i>
                                            <i class="fa fa-star grey"></i>
                                            <i class="fa fa-star grey"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>15 <span>reviews</span></p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="trip-text-container">
                                        <h2>Duration</h2>
                                        <h3>10 Days</h3>
                                    </div>    
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="trip-text-container budget">   
                                        <h2>Budget</h2>
                                        <h1>$659</h1>
                                        <p>per person</p>
                                    </div>    
                                </div>
                                <div class="col-md-12 text-center">
                                    <button id="booking-button" type="submit">Book this trip</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Trip Information-->
        <!--Trip Inclution Start-->
        <div class="trip-inclution section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <div class="title-border">
                                <h1>Trip <span>Inclutions</span></h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="include-item">
                            <div class="include-icon">
                                <i class="fa fa-cutlery"></i>
                            </div>
                            <div class="include-text">
                                <h4>Meals</h4>
                                <p>8 breakfasts, 3 lunches, 2 dinners</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="include-item">
                            <div class="include-icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="include-text">
                                <h4>Transport</h4>
                                <p>Bus, Minibus, Raft, Bus, Minibus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <div class="include-item no-margin">
                            <div class="include-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="include-text">
                                <h4>Accommodation</h4>
                                <p>Camping (with basic facilities) (1 night), Guesthouse (5 nights), Hotel (3 nights)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>