@extends('frontend.master')

@section('pagelevelcss')

@stop

@section('content')

    <div class="nav-container affix" id="mainMenu">
       <!--start mobile navigation-->
       <div class="nav nav-sm visible-xs">
          <div class="container">
             <div class="row">
                <div class="col-xs-5 col-sm-2 algn-left">
                   <a href="{!! URL::route('common.home') !!}" >
                      <!--place for mobile logo-->
                      <img class="logo" alt="logo" src="{!! asset('public/frontend/img/master-logo.png') !!}">
                   </a>
                </div>
                <div class="col-xs-9 col-sm-10 col-xs-7 algn-right">
                  <a href="#" class="hamburger-toggle" data-toggle-class="#deskNav;hidden-xs">
                    <i class="material-icons">&#xE3C7;</i>
                  </a>
                </div>
             </div>
          </div>
       </div>
       <!--end navigation-->
       <!--start desktop navigation-->
       <nav class="nav nav-sm hidden-xs" id="deskNav">
          <div class="container">
             <div class="row">
                <div class="col-md-2 col-sm-2 hidden-xs text-left">
                   <a href="{!! URL::route('common.home') !!}">
                      <!--place for desktop logo-->
                      <img class="logo" alt="logo" src="{!! asset('public/frontend/img/master-logo.png') !!}">
                   </a>
                </div>
                <div class="col-md-10 col-sm-10 mobile-menu">
                   <ul class="menu-horizontal text-left">
                      <li class="dropdown">
                         <a class="page-scroll" href="{!! URL::route('common.blogs') !!}">&#x2190; Back</a>
                      </li>
                   </ul>
                </div>
             </div>
             <!--end of row-->
          </div>
          <!--end of container-->
       </nav>
       <!--end navigation-->
    </div>

    <div class="main-container">
        <!-- =========================================
        main-content
        ========================================== -->
        <section class="main-blog pd-0">
          <div class="inner-back-blog main-gradient">
            <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title-blog">
                  @if($page_content->blog_detail_text_1 != '')
                    <h1>{!! $page_content->blog_detail_text_1 !!}</h1>
                  @endif
                  @if($page_content->blog_detail_text_2 != '')
                    <p>{!! $page_content->blog_detail_text_2 !!}</p>
                  @endif
                </div>
                <!-- / of title-blog -->
              </div>
            </div>
          </div>
          </div>
          <!-- / of inner-back-blog -->
        </section>
        <!-- =========================================
        bolog canvas
        ========================================== -->
        <section class="blog-canvas">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="slider-blog">
                  <div class="bxslider-blog">
                    <div>
                      @if($blog_detail->cover != '')
                        <img class="img-responsive" src="{!! asset($blog_detail->cover->source) !!}" alt="{!! $blog_detail->title !!}">
                      @else
                        <img class="img-responsive" src="{!! asset('public/frontend/img/no-image870-379.png') !!}" alt="{!! $blog_detail->title !!}">
                      @endif
                    </div>
                  </div>
                </div>
                <!-- / of slider-blog -->
                <div class="blog-meta">
                  <p>
                    <?php $blog_publish_date = date('dS  M, Y',strtotime($blog_detail->publish_date));?>
                    <span class="meta-date">{!! $blog_publish_date !!} | {!! $blog_detail->written_by   !!} </span>
                    <!-- <a href="#" class="meta-category read-more">23 Comments</a> -->
                  </p>
                </div>
                <!-- / of blog-meta -->
                <div class="blog-content">
                    <h3>{!! $blog_detail->title !!}</h3>
                    <p>{!! nl2br($blog_detail->description) !!}</p>
                </div>
                <!-- / of blog-content -->
                <div class="blog-share-box clearfix">
                    <div class="agency">
                        <span>
                            in design, inspiration, agency
                        </span>
                    </div>
                    <div class="share-box ">
                        <div class="share-link">
                            <i class="fa fa-share-alt"></i>
                            <div class="social-icons">
                                <ul class="list-inline list-unstyled">
                                    <li><a href="{!! $setting_detail->facebook_url !!}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{!! $setting_detail->twitter_url !!}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{!! $setting_detail->google_plus_url !!}" class="google"><i class="fa fa-google"></i></a></li>
                                    <li><a href="{!! $setting_detail->linkedin_url !!}" class="fa fa-linked-in"><i class="fa fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="about-the-author">
                    <h3>About the author</h3>
                    <div class="about-author-box">
                        <div class="media">
                            <div class="media-left">
                                <div class="auth-av">
                                    <img src="img/blog-single-author.jpg" class="media-object" alt="blog-author">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Caroline Delivigne</h4><span><a href="#">Authors Page</a></span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.  </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="author-comments">
                    <h3>Comments</h3>
                    <div class="comments">
                        <div class="media">
                            <div class="media-left">
                                <div class="auth-av">
                                    <img src="img/blog-single-author-2.jpg" class="media-object" alt="blog-author">
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Jack Porters<small>June 22, 2016 at 3:17 pm</small></h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
                                <div class="reply-button">
                                    <a href="#" class="reply-btn">REPLY</a>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <div class="auth-av">
                                            <img src="img/blog-single-author-3.jpg" class="media-object" alt="blog-author">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Marc Terrenzi <small>June 22, 2016 at 4:28 pm</small></h4>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                        <div class="reply-button">
                                            <a href="#" class="reply-btn">REPLY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- / of author-comments -->
                <div class="leave-reply">
                    <div class="contact-content">
                        <h3>Contact</h3>
                    </div>
                </div>
                <!-- / of leave-reply -->
                <div class="contact-form">
                    <div class="row">
                        <form class="text-left" method="post" id="contact_form" action="{!! URL::to('save-contact-form')!!}">
                        {{ csrf_field() }}

                            <div class="clearfix">
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>NAME <span>*</span></label>
                                    <input class="form-control" name="name" placeholder="enter your name" type="text">
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <label>E-MAIL ADDRESS <span>*</span></label>
                                    <input class="form-control" name="email" placeholder="enter e-mail address" type="text">
                                </div>
                                <div class="form-group col-md-4 col-sm-12">
                                    <label>SUBJECT <span>*</span></label>
                                    <input class="form-control" name="subject" placeholder="enter your subject" type="text">
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="form-group col-sm-12">
                                    <label>MESSAGE <span>*</span></label>
                                    <textarea class="form-control" placeholder="type in a message" name="comments"></textarea>
                                </div>
                                <!--  <input class="btn btn-default pull-right" name="submit" value="SUBMIT" type="submit"> -->
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-grd pull-right btn-gradient" id="contact_form_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / of contact-form -->
              </div>
              <!-- <div class="col-xs-12 col-sm-4 col-md-3 blog-std-page">
                <div class="blog-sidebar">
                  <div class="search-bar">
                      <input type="text" class="form-control" placeholder="search for something">
                      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                  <div class="widget-box">
                      <div class="widget-title">
                          <h3 class="text-uppercase">Popular Categories</h3>
                      </div>
                      <div class="widget-body">
                          <ul class="list-unstyled">
                              <li><a href="#">Internet Marketing <span>(05)</span> </a></li>
                              <li><a href="#">Search Engine Optimization <span>(08)</span> </a></li>
                              <li><a href="#">Webdevelopement <span>(04)</span> </a></li>
                              <li><a href="#">Creative Strategies <span>(12)</span> </a></li>
                              <li><a href="#">Webhosting Services <span>(07)</span> </a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="widget-box">
                      <div class="widget-title">
                          <h3 class="text-uppercase">recent posts</h3>
                      </div>
                      <div class="widget-body">
                          <div class="media">
                              <div class="media-left">
                                  <a href="blog-single.html">
                                      <img src="img/recent-post-1.jpg" class="media-object" alt="blog-author">
                                  </a>
                              </div>
                              <div class="media-body">
                                  <a href="blog-single.html">Stet clita ea et gubergren, kasd magna no rebum</a>
                                  <div class="recent-post-date">
                                      <p class="pull-right">12th June, 2016</p>
                                  </div>
                              </div>
                          </div>
                          <div class="media">
                              <div class="media-left">
                                  <a href="blog-single.html">
                                      <img src="img/recent-post-1.jpg" class="media-object" alt="blog-author">
                                  </a>
                              </div>
                              <div class="media-body">
                                  <a href="blog-single.html">Stet clita ea et gubergren, kasd magna no rebum</a>
                                  <div class="recent-post-date">
                                      <p class="pull-right">10th June, 2016</p>
                                  </div>
                              </div>
                          </div>
                          <div class="media">
                              <div class="media-left">
                                  <a href="blog-single.html">
                                      <img src="img/recent-post-1.jpg" class="media-object" alt="blog-author">
                                  </a>
                              </div>
                              <div class="media-body">
                                  <a href="blog-single.html">Stet clita ea et gubergren, kasd magna no rebum</a>
                                  <div class="recent-post-date">
                                      <p class="pull-right">08th June, 2016</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="widget-box">
                      <div class="widget-title">
                          <h3 class="text-uppercase">instagram feed</h3>
                      </div>
                      <div class="widget-body">
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>

                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                          <div class="col-xs-3">
                              <div class="instagram-updates">
                                  <a href="#">
                                      <img src="img/instagram-1.jpg" alt="">
                                  </a>
                                  <div class="instagram-overlay"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="widget-box">
                      <div class="widget-title">
                          <h3 class="text-uppercase">popular tags</h3>
                      </div>
                      <div class="widget-body">
                          <div class="tags">
                              <a href="#" class="btn btn-outline">CREATIVE</a>
                              <a href="#" class="btn btn-outline">WORDPRESS THEME</a>
                              <a href="#" class="btn btn-outline">WEBSITE DESIGN</a>
                              <a href="#" class="btn btn-outline">HTML 5</a>
                              <a href="#" class="btn btn-outline">MULTI-PURPOSE</a>
                              <a href="#" class="btn btn-outline">TEMPLATE</a>
                          </div>
                      </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>
          @include("frontend.partials.footer")
      </div>

@stop

@section('pageleveljs')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
  <script>
      // $("#trial_ielts").validate();

      $(document).ready(function(){

          $("#contact_form").validate({
              rules : {
                  name    : {
                      required    : true
                  },
                  email : {
                    required    : true,
                    email       : true
                  },
                  subject : {
                    required    : true,
                  },
                  comments : {
                    required    : false,
                  }
              },
              messages : {
                  name    : {
                      required     : "Name field is required."
                  },
                  email : {
                    required    : "Email field is required.",
                    email       : "Please enter valid email address.",
                  },
                  subject : {
                    required    : "Subject field is required.",
                  },
                  comments : {
                    required    : "Message field is required."
                  }
              },
              errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                  $(placement).append(error)
                } else {
                  error.insertAfter(element);
                }
              }
          });

      //code for submit data on enter form controls
          $('#contact_form_btn').find('input').keypress(function(e) {
               if(e.which == 10 || e.which == 13) {
                    $("#contact_form").trigger('click');
               }
          });
      });

  </script>
@stop