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
                  @if($page_content->student_text_1 != '')
                    <h1>{!! $page_content->student_text_1 !!}</h1>
                  @endif
                  @if($page_content->student_text_2 != '')
                    <p>{!! $page_content->student_text_2 !!}</p>
                  @endif
                </div>
                <!-- / of title-blog -->
              </div>
            </div>
          </div>
          </div>
          <!-- / of inner-back-blog -->
        </section>
        
        <section class="achieve">
          <div class="container">
            <div class="row">
              @foreach($students as $student)
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="achieve_main text-center">
                  <div class="user_pr">
                    <img class="w-100 img-thumbnail img-circle shadow-round" src="{{ $student->cover->source }}" alt="user-img">
                  </div>
                  <div class="writen-section">
                    <div class="inner-detail">
                      <div class="title_main mt-15 mb-15">
                        <h3 class="text-capitalize mb-0 pb-0">{!! $student->first_name !!} {!! $student->last_name !!}</h3>
                        <em>{!! $student->course !!}</em>
                      </div>
                      <div class="pera-detail">
                        <p>{!! $student->summary !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section> 

        @include("frontend.partials.footer") 

    </div>

@stop

@section('pageleveljs')

@stop