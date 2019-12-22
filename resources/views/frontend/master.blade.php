<!DOCTYPE html>
<html lang="en">
<head>
    @include("frontend.partials.head")
    @include("frontend.partials.head-css")
    @yield('pagelevelcss')    
</head>
 
<body id="page-top">
	@if(!empty(Session::get('success')))
    <div class="alert alert-success" id="flashsuccess" style="display: none;">
        <strong>Success!</strong> {!! Session::get('success') !!}<br><br>
    </div>
    @endif
    @include("frontend.partials.preloader")
    
            @yield('content')
        
    @include("frontend.partials.footer-js")
    
    @yield('pageleveljs')

</body>

</html>