<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start @if(Request::segment(2)=='home') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.home') !!}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>

            <!-- <li class="nav-item @if(Request::segment(2)=='pages') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.general.pages.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Pages</span>
                </a>
            </li> -->

            <li class="nav-item @if(Request::segment(2)=='galleries') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.galleries.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Galleries</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='blogcategories') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.blogcategories.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Blog Categories</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='blogs') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.blogs.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Blogs</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='students') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.students.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Students</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='trial-ieltsforms') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.trialieltsforms.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Trial Ielts Forms</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='inquiryforms') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.inquiryforms.index') !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Inquiry Forms</span>
                </a>
            </li>
            
            <li class="nav-item @if(Request::segment(2)=='settings') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.settings.edit', 1) !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">General Settings</span>
                </a>
            </li>

            <li class="nav-item @if(Request::segment(2)=='page-content') {!! 'active open' !!} @endif">
                <a href="{!! URL::route('admin.pagecontent.edit', 1) !!}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Page Content</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
