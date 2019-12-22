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
                         <a class="page-scroll" href="{!! URL::route('common.home') !!}">&#x2190; Back</a>
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

        <section class="main-blog pd-0">
          <div class="inner-back-blog main-gradient">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="title-blog">
                    @if($page_content->blog_text_1 != '')
                      <h1>{!! $page_content->blog_text_1 !!}</h1>
                    @endif
                    @if($page_content->blog_text_2 != '')
                      <p>{!! $page_content->blog_text_2 !!}</p>
                    @endif
                  </div>
                  <!-- / of title-blog -->
                </div>
              </div>
            </div>
          </div>
          <!-- / of inner-back-blog -->
        </section>
    
        <section class="achieve" id="gallery">
           <div class="container">
              <div class="row">

                @foreach($blog_list as $blog_list_val)
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-30">
                    @if($blog_list_val->cover != '')
                      <a href="{!! URL::route('common.blog.details', [ 'slug' => $blog_list_val->slug ]) !!}">
                        <img class="img-responsive w-100" src="{!! asset($blog_list_val->cover->source) !!}" alt="{!! $blog_list_val->title !!}">
                      </a>
                      <p>{!! $blog_list_val->title !!}</p>
                    @else
                      <a href="{!! URL::route('common.blog.details', [ 'slug' => $blog_list_val->slug ]) !!}">
                        <img class="img-responsive w-100" src="{!! asset('public/frontend/img/no-image.png') !!}" alt="{!! $blog_list_val->title !!}">
                      </a>
                      <p>{!! $blog_list_val->title !!}</p>
                    @endif
                  </div>
                @endforeach

              </div>
              <!--end of row-->
           </div>
           <!--end of container-->
        </section>

        @include("frontend.partials.footer") 

    </div>

@stop

@section('pageleveljs')

@stop