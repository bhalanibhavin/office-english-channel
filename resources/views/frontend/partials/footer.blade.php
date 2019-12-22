<footer class="pd-sm ">
    <div class="container">
       <div class="row">
          <div class="col-sm-6">
             <ul class="list-inline">
                <li>
                   <a href="{!! URL::route('common.home') !!}#aboutus" class="page-scroll">
                      <h6>Genesis</h6>
                   </a>
                </li>
                <li>
                   <a href="{!! URL::route('common.home') !!}#contactus" class="page-scroll">
                      <h6>Contact us</h6>
                   </a>
                </li>
                <li>
                   <a href="#" class="page-scroll" href="{!! URL::route('common.trial-ielts') !!}" target="_blank">
                      <h6>Trial IELTS</h6>
                   </a>
                </li>
             </ul>
          </div>
          <div class="col-sm-6">
             <ul class="list-inline algn-right">
                <li>
                   <a href="{!! $settings_date->google_plus_url !!}" target="_blank">
                   <i class="icon-googlePlus ico-xs"></i>
                   </a>
                </li>
                <li>
                   <a href="{!! $settings_date->facebook_url !!}" target="_blank">
                   <i class="icon-facebook ico-xs"></i>
                   </a>
                </li>
                <li>
                   <a href="{!! $settings_date->linkedin_url !!}" target="_blank">
                   <i class="icon-linkdin ico-xs"></i>
                   </a>
                </li>
                <li>
                   <a href="{!! $settings_date->twitter_url !!}" target="_blank">
                   <i class="icon-twitter ico-xs"></i>
                   </a>
                </li>
             </ul>
          </div>
       </div>
       <!--end of row-->
       <div class="row">
         <div class="col-sm-7 col-xs-12">
          @if($settings_date->admin_email != '')
            <a href="mailto:{!! $settings_date->admin_email !!}" class="support">emailus: {!! $settings_date->admin_email !!}</a>
          @endif
         </div>
         <div class="col-sm-5 col-xs-12 algn-right">
            <span class="copyright">Made with Codefarm info tech all rights recieved 2018</span>
         </div>
       </div>
       <!--end of row-->
    </div>
    <!--end of container-->
</footer>