<div class="nav-container affix" id="mainMenu">
 <!--start mobile navigation-->
 <div class="nav nav-sm visible-xs">
    <div class="container">
       <div class="row">
          <div class="col-xs-5 col-sm-2 algn-left">
             <a href="#page-top" class="page-scroll">
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
             <a href="{!! URL::route('common.home') !!}" class="page-scroll">
                <!--place for desktop logo-->
                <img class="logo" alt="logo" src="{!! asset('public/frontend/img/master-logo.png') !!}">
             </a>
          </div>
          <div class="col-md-10 col-sm-10 mobile-menu">
             <ul class="menu-horizontal text-left">
                <li class="dropdown">
                   <a class="page-scroll" href="#aboutus">Genesis</a>
                </li>
                <li class="dropdown">
                   <a class="page-scroll" href="#gallery">Gallery</a>
                </li>
                <li class="dropdown">
                   <a class="page-scroll" href="{!! URL::route('common.students') !!}">Students</a>
                </li>
                <li class="dropdown">
                   <a class="page-scroll" href="#contactus">Contact us</a>
                </li>
                <li class="dropdown">
                  <a class="page-scroll" href="{!! URL::route('common.blogs') !!}">Blog</a>
                </li>
                <li class="dropdown">
                   <a class="page-scroll" href="{!! URL::route('common.trial-ielts') !!}" target="_blank">Trial IELTS</a>
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