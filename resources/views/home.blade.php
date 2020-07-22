@extends('layouts.app')

@section('content')
<style type="text/css">
    .register-form-div{
        display: none;
    }
</style>
<!--Bride Groom Section-->
    <section id="bride_groom_sec" class="wedding-sec bride_groom_sec bride_groom_sec_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
                         <h2 class="section-heading">Bride & Groom</h2>
                         <div class="bottom-dash"></div>
                         <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                   </div>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
        <div class="brd_grm_wrapper four">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="br_grm">
                        <div class="brd_grm_wrap">
                            <div class="brd_grm_img">
                                 <img src="{{ asset('img/placehold/bride-grm3.png') }}" alt="" />
                                <div class="brgm_overlay">
                                    <a class="br_gr_zoom" href="#myModal1" data-toggle="modal">
                                        <img src="{{ asset('img/zoom.png') }}" alt="" />
                                    </a>     
                                </div>
                            </div>
                        </div>
                        <h3>Jane doe</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
perspiciatis unde omnis iste natus error sit.</p>
                        <p class="social_icons">
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-linkedin"></i></a>
                             <a href="#"><i class="fa fa-facebook"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="br_grm">
                        <div class="brd_grm_wrap">
                            <div class="brd_grm_img">
                                 <img src="img/placehold/bride-grm3.png" alt="" />
                                 <div class="brgm_overlay">
                                    <a class="br_gr_zoom" href="#myModal2" data-toggle="modal">
                                        <img src="{{ asset('img/zoom.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3>Jhon doe</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        <p class="social_icons">
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-linkedin"></i></a>
                             <a href="#"><i class="fa fa-facebook"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    </section>
    <!--Bride Groom Section End-->
    
    
    <!--Parallex Section One-->
    <div class="img-holder" data-image="{{ asset('img/placehold/parallex1.png') }}" data-width="1400" data-height="1122"></div>
    <!--Parallex Section One End-->
    
    <!--Love story section-->
    <section id="love_story" class="wedding-sec love_story_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <div class="section-head">
                     <h2 class="section-heading">Love Story</h2>
                     <div class="bottom-dash"></div>
                     <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                     </div>
                </div>
            </div>  
        </div>
        <div class="love_story_wrapper">
            <div class="container">
                <div id="love_story_tab" class="love_story_tab three">
                    <div class="row">
                        <div role="tabpanel">
                            <div class="col-md-1">
                                  <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                     <li role="presentation" class="active"><a href="#story1" aria-controls="story1" role="tab" data-toggle="tab"><img src="img/three/meet1.png" alt="" /><img src="img/three/meet2.png" alt="" /></a></li>
                                     <li role="presentation"><a href="#story2" aria-controls="story2" role="tab" data-toggle="tab"><img src="img/three/kiss1.png" alt="" /><img src="img/three/kiss2.png" alt="" /></a></li>
                                     <li role="presentation"><a href="#story3" aria-controls="messages" role="tab" data-toggle="tab"><img src="img/three/trip1.png" alt="" /><img src="img/three/trip2.png" alt="" /></a></li>
                                     <li role="presentation"><a href="#story4" aria-controls="story3" role="tab" data-toggle="tab"><img src="img/three/engage1.png" alt="" /><img src="img/three/engage2.png" alt="" /></a></li>
                                     <li role="presentation"><a href="#story5" aria-controls="story4" role="tab" data-toggle="tab"><img src="img/three/pregnant1.png" alt="" /><img src="img/three/pregnant2.png" alt="" /></a></li>
                                </ul>
                            </div>
                          <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="story1">
                                    <div class="col-md-6">
                                        <div class="love_story_img">
                                             <img src="img/placehold/lovestory3.png" alt="" />   
                                        </div>
                                    </div>  
                                    <div class="col-md-5">
                                        <div class="love_story_details"> 
                                            <p class="posting_date">December 19,2012</p> 
                                            <h3><a href="#">Day we meet each other</a></h3>
                                            <p class="post_text">
                                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <a href="#" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a>
                                        </div>
                                    </div>      
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="story2">
                                    <div class="col-md-6">
                                         <div class="love_story_img">
                                             <img src="img/placehold/lovestory3.png" alt="" />   
                                         </div>
                                    </div>  
                                    <div class="col-md-5">
                                        <div class="love_story_details"> 
                                            <p class="posting_date">february 19,2013</p>  
                                            <h3><a href="#">Day we meet each other</a></h3>
                                            <p class="post_text">
                                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <a href="#" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="story3">
                                    <div class="col-md-6">
                                         <div class="love_story_img">
                                             <img src="img/placehold/lovestory3.png" alt="" />   
                                         </div>
                                    </div>  
                                    <div class="col-md-5">
                                        <div class="love_story_details"> 
                                             <p class="posting_date">july 19,2013</p>  
                                             <h3><a href="#">Day we meet each other</a></h3>
                                             <p class="post_text">
                                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                             </p>
                                             <a href="#" class="read_more">Rea More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="story4">
                                    <div class="col-md-6">
                                         <div class="love_story_img">
                                             <img src="img/placehold/lovestory3.png" alt="" />   
                                        </div>
                                    </div>  
                                    <div class="col-md-5">
                                        <div class="love_story_details"> 
                                              <p class="posting_date">january 19,2013</p>  
                                             <h3><a href="#">Day we meet each other</a></h3>
                                             <p class="post_text">
                                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                             </p>
                                             <a href="#" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="story5">
                                    <div class="col-md-6">
                                         <div class="love_story_img">
                                             <img src="img/placehold/lovestory3.png" alt="" />   
                                        </div>
                                    </div>  
                                    <div class="col-md-5">
                                        <div class="love_story_details"> 
                                             <p class="posting_date"> january 19,2015</p> 
                                             <h3><a href="#">Day we meet each other</a></h3>
                                             <p class="post_text">
                                              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                             </p>
                                             <a href="#" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- tabpanel -->
                     </div><!-- row -->
                 </div><!-- love story tab -->
            </div><!-- container -->
        </div><!-- love story wrapper -->
    </section>
    <!--Love story section End-->
    
     <!--Parallex section 2-->
    <div class="img-holder" data-image="{{ asset('img/placehold/parallex2.png') }}" data-width="2616" data-height="1553"></div>
    <!--Parallex section 2 End-->
    <!--Our Family section-->
    <section id="family" class="wedding-sec family_sec four">
         <div class="container">
             <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
                         <h2 class="section-heading">Our Family </h2>
                         <div class="bottom-dash"></div>
                         <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
         </div>
            
        <div class="family_member_wrap">
            <div class="container">
                <div class="row">
                    <!-- col-lg-12 -->
                    <div class="family_tab_4">
                        <div class="family-wrap-3 bride-family-3" id="family1">
                            <h2>Bride Family</h2>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png"  alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                        </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">father</p>
                                 </div>
                            </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png"  alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                        </div>
                                    </div>
                                     <h3>john Connor</h3>
                                     <p class="relation">mother</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png"  alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                        </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">brother</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png"  alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                         </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">sister</p>
                                </div>
                            </div>  
                        </div>
                        <div class="family-wrap-3 groom-family-3" id="family2">
                            <h2>groom Family</h2>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png"  alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                         </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">father</p>
                                </div>
                             </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png" alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                         </div>
                                    </div>
                                    <h3>John Connor</h3>
                                    <p class="relation">mother</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png" alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                         </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">brother</p>
                                </div>
                             </div>
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="family_mem_wrap">
                                    <div class="family_mem_img">
                                         <img src="img/placehold/family-mem-4.png" alt="" />
                                         <div class="brgm_overlay">
                                            <p class="social_icons">
                                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                            </p>     
                                        </div>
                                    </div>
                                     <h3>John Connor</h3>
                                     <p class="relation">sister</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                 </div>
             </div>
        </div>
    </section>
    <!--Our Family section End-->
    
    <!--Our Photo Gallery section-->
    <section id="photo_gallery" class="wedding-sec photo_gallery_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
                        <h2 class="section-heading">Photo Gallery</h2>
                        <div class="bottom-dash"></div>
                         <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                    </div>   
                </div>
            </div>   
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="controls">
                        <div class="control-group gallery-nav two">
                             <button class="filter" data-filter="all">All</button>
                             <button class="filter" data-filter=".wday">Wedding Day</button>
                             <button class="filter" data-filter=".trip">Trip to Greece</button>
                             <button class="filter" data-filter=".sydney">Summer in Sydney</button>
                        </div>
                    </div>
                </div>
            </div>  
                
            <div id="photo-container" class="row photo-container">
                <div class="mix wday Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix trip Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix mix_big sydney Graphics">
                    <img src="img/placehold/gallery-img-big.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix wday Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix wday Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix mix_big trip Graphics">
                    <img src="img/placehold/gallery-img-big.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix sydney Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mix wday Graphics">
                    <img src="img/placehold/gallery-img-sml.png" alt="" />
                    <div class="overlay">
                        <div class="overlay_text">
                            <div class="inner-extra">
                                 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="" /></a>
                                 <p>Some content goes here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Our Photo Gallery section End-->
    
    <!--Events ans Parties section-->
    <section id="events" class="wedding-sec event_party_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
                    <h2 class="section-heading">Events & Parties </h2>
                    <div class="bottom-dash"></div>
                        <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                   </div><!--.section-head-->
                </div><!--.col-lg-12-->
            </div><!--.row-->
        
            
            <div class="row two">
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards">
                                <div class="card front evnt_prt evnt_prt_1">
                                    <h2>Wedding Ceremony</h2>
                                    <img src="img/event_icon1.png" alt="" />
                                    <p>LONDON.UK</p>
                                    <button class="btn btn-primary btn_evnt">4:30PM</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_1-->
                                <div class="card back evnt_prt_back evnt_prt_back_1">
                                    <h2>Wedding Ceremony</h2>
                                     <div class="evnt_addres">
                                         <p>Hotel Radisson</p>
                                         <p>4th Street,DOHS MIRPUR</p>
                                         <p>Saturday, 20 july 2015</p>
                                         <p>4:30PM - 6:15PM</p>
                                     </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div><!-- .col-md-4-->
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards">
                                <div class="card front evnt_prt evnt_prt_2">
                                    <h2>Wedding Party</h2>
                                    <img src="img/event_icon2.png" alt="" />
                                    <p>LONDON.UK</p>
                                    <button class="btn btn-primary btn_evnt">6:30PM</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_2-->
                                <div class="card back evnt_prt_back evnt_prt_back_2">
                                    <h2>Wedding Party</h2>
                                     <div class="evnt_addres">
                                         <p>Hotel Radisson</p>
                                         <p>4th Street,DOHS MIRPUR</p>
                                         <p>Saturday, 20 july 2015</p>
                                         <p>4:30PM - 6:15PM</p>
                                     </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_2-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div><!-- .col-md-4-->
                <div class="col-md-4">
                    <div class="evnt_card_container">
                        <div class="containers">
                            <div class="cards">
                                <div class="card front evnt_prt evnt_prt_3">
                                    <h2>Dinner</h2>
                                    <img src="img/event_icon3.png" alt="" />
                                    <p>LONDON.UK</p>
                                    <button class="btn btn-primary btn_evnt">7:45PM</button>
                                </div><!--.card .front .evnt_prt .evnt_prt_3-->
                                <div class="card back evnt_prt_back evnt_prt_back_3">
                                    <h2>Dinner</h2>
                                     <div class="evnt_addres">
                                         <p>Hotel Radisson</p>
                                         <p>4th Street,DOHS MIRPUR</p>
                                         <p>Saturday, 20 july 2015</p>
                                         <p>4:30PM - 6:15PM</p>
                                     </div>
                                </div><!--.card .back .evnt_prt_back .evnt_prt_back_3-->
                            </div><!-- .cards-->
                        </div><!--.containers-->
                    </div><!-- .evnt_card_container-->
                </div><!-- .col-md-4-->
            </div><!--Parallex section 3-->
        </div><!--Parallex section 3-->     
    </section>
    <!--Events ans Parties section End-->
    
    <!--Parallex section 3-->
    <div class="img-holder" data-image="{{ asset('img/placehold/parallex3.png') }}" data-width="3888" data-height="2592"></div>
    <!--parallex section 3 End-->
    
    <!-- Bridesmaid and Groomsmen sec-->
    <section id="bmaid_gmen" class="wedding-sec bmaid_gmen_sec four">
        <div class="container">
             <div class="row">
                <div class="col-lg-12 text-center">
                     <div class="section-head">
                     <h2 class="section-heading">Bridesmaid & Groomsmen</h2>
                     <div class="bottom-dash Down"></div>
                         <p class="section-subheading text-muted Down" data-wow-delay=".25s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                     </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 bmaid_sec">
                    <div class="bmaid_nav" role="tabpanel">
                      <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                             <li role="presentation">
                                 <a href="#home"  class="" aria-controls="home" role="tab" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a>
                            </li>
                            <li role="presentation">
                                 <a href="#profile" class="" aria-controls="profile" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a>
                            </li>
                            <li role="presentation" class="active">
                                 <a href="#messages" aria-controls="messages" role="tab" class="" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a>
                            </li>
                        </ul>

                          <!-- Tab panes -->
                        <div class="tab-content bridemaid_tab_content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="bridemaid">
                                     <h3 class="">Natalie Jones</h3>
                                     <p  class="">
                                     Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
        explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                     </p>
                                     <p class="social_icons">
                                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                         <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                         <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                     </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="bridemaid">
                                     <h3 class="">Angle Cyrus</h3>
                                     <p class="">
                                     Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
        explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                     </p>
                                     <p class="social_icons">
                                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                         <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                         <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                     </p>
                                 </div> 
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="bridemaid">
                                      <h3 class="">Lady Teramera</h3>
                                      <p class="">
                                        Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
        explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                      </p>
                                      <p class="social_icons">
                                          <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                          <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                          <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                      </p>
                                 </div> 
                            </div>
                        </div>
                     </div>  
                </div>
                <div class="col-lg-6 col-md-6 gmen_sec">
                    <div class="gmen_nav" role="tabpanel">
                         <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                             <li role="presentation" class="active"><a href="#groom1" class="" aria-controls="home" role="tab" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a></li>
                             <li role="presentation"><a href="#groom2" class="" aria-controls="profile" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a></li>
                             <li role="presentation"><a href="#groom3" class="" aria-controls="messages" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="" /></a></li>
                        </ul>

                         <!-- Tab panes -->
                         <div class="tab-content groomsmen_tab_content">
                             <div role="tabpanel" class="tab-pane fade in active" id="groom1">
                                  <div class="groomsmen">
                                      <h3 class="#">Joseph Connor</h3>
                                      <p class="#">
                                        Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
        explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                      </p>
                                      <p class="social_icons">
                                          <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                          <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                          <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                      </p>
                                  </div>
                            </div>
                        <div role="tabpanel" class="tab-pane fade" id="groom2">
                            <div class="groomsmen">
                                  <h3 class="#">Albert telesamad</h3>
                                  <p class="#">
                                    Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
    explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                  </p>
                                  <p class="social_icons">
                                      <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                      <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                      <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                  </p>
                            </div>  
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="groom3">
                             <div class="groomsmen">
                                 <h3 class="#">John Kawsar</h3>
                                 <p class="#">
                                    Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
    explicabo. Nemo enim ipsam voluptatem quia voluptas.  
                                 </p>
                                 <p class="social_icons">
                                     <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                     <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                                     <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                 </p>
                            </div>  
                         </div>
                        
                        </div>
                     </div>  
                </div>  
            </div>
        </div>      
    </section>
    <!-- Bridesmaid and Groomsmen sec End-->
    
    <section id="video-background" class="video_background_sec">
        <!--Hidden header for w3c validation only-->
        <h2 class="hidden">Hidden header for w3c validation only</h2>
        <!--Hidden header for w3c validation only-->
         <div class="video-bg-self"></div> 
    </section>
    <!-- Blog section-->
    <section id="blog" class="wedding-sec blog_sec">
        <div class="container">
             <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
                    <h2 class="section-heading">Our Blog</h2>
                    <div class="bottom-dash"></div>
                        <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
                   </div> 
                </div>
            </div><!-- .row-->
        </div><!-- .container-->
    <div class="blog_wide_wrap two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog_post">
                        <p class="posting_date">December 19,2014</p> 
                        <h3><a href="blog-single.html">Some title goes here</a></h3>
                        <div class="blog_img">
                             <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="" /></a>    
                        </div>
                        <p class="blog_text">
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
                        </p>
                        <p class="blog_bottom_line">
                             <span><i class="fa fa-user"></i><a href="#">Jason Richard </a></span><span>|</span>
                             <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
                             <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
                        </p>
                    </div><!-- .blog_post-->
                </div><!-- .col-lg-4 .col-md-4 .col-sm-6--> 
                <div class="col-lg-4 col-md-4 col-sm-6">
                     <div class="blog_post">
                         <p class="posting_date"> December 19,2014</p> 
                         <h3><a href="blog-single.html">Some title goes here</a></h3>
                         <div class="blog_img">
                             <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="" /></a>    
                         </div>
                         <p class="blog_text">
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
                         </p>
                        <p class="blog_bottom_line">
                             <span><i class="fa fa-user"></i> <a href="#">Jason Richard </a> </span><span>|</span>
                             <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
                             <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
                        </p>
                    </div><!-- .blog_post-->
                </div><!-- .col-lg-4 .col-md-4 .col-sm-6--> 
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog_post">
                         <p class="posting_date">December 19,2014</p> 
                         <h3><a href="blog-single.html">Some title goes here</a></h3>
                         <div class="blog_img">
                             <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="" /></a>    
                         </div>
                         <p class="blog_text">
                             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
                         </p>
                         <p class="blog_bottom_line">
                             <span><i class="fa fa-user"></i> <a href="#">Jason Richard </a> </span><span>|</span>
                             <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
                             <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
                        </p>
                    </div><!-- .blog_post-->
                </div><!-- .col-lg-4 .col-md-4 .col-sm-6--> 
            </div><!-- .row-->
        </div><!-- .container--> 
    </div><!-- .blog_wide_wrap two-->
    </section>
    <!-- Blog section End-->
    
    <!--RSVP Section-->
    <section id="rsvp" class="rsvp_sec">
        <h2 class="hidden"> Text hidden heading for validation</h2> 
        <div class="map-holder">
            <div id="map" class="map"></div>
        </div>
    </section>
    
    <div class="container rsvp_form login-form-div">
        <div class="row">
            <div class="col-lg-12">
                <div class="form_wrapper two new">
                     <div class="section-head">
                     <h2 class="section-heading">Login</h2>
                      <div class="bottom-dash"></div>
                        <p class="section-subheading text-muted">Login to our site. </p>
                     </div>
                    
                     <form method='post' action='contact.php' id='forms'>
                        <div class="form-group">
                            <input name='email' type="email" class="form-control" id="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name='password' type="password" class="form-control" id="password" required placeholder="password">
                        </div>
                        <input type="submit" class="btn btn-default btn_attend" value="Login">
                        <button type="button" class="btn btn-default btn_attend reg-btn" value='Send'>Register</button>
                    </form>
                </div>      
            </div>
        </div><!-- row   -->
    </div><!-- Container -->
    <div class="container rsvp_form register-form-div">
        <div class="row">
            <div class="col-lg-12">
                <div class="form_wrapper two new">
                     <div class="section-head">
                     <h2 class="section-heading">Register</h2>
                      <div class="bottom-dash"></div>
                        <p class="section-subheading text-muted">Register to our site become member of our family. </p>
                     </div>
                    
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name...">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email...">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password...">
                        </div>
                        <div class="form-group select_group select_guest">
                            <select name="gender" class="form-control select_frm" id="numguest">
                                 <option>Gender</option>
                                 <option value='male'>Male</option>
                                 <option value='female'>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-default btn_attend" value="Register">
                        <button type="button" class="btn btn-default btn_attend log-btn" >Login</button>
                        </div>
                    </form>
                </div>      
            </div>
        </div><!-- row   -->
    </div><!-- Container -->
    
@endsection
