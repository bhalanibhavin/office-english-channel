@extends('frontend.master')

@section('pagelevelcss')
<style type="text/css">
  .aboutus-text p{color: #7f7e7e !important; font-size: 1.15em !important;line-height: 1.5em !important;font-weight: 400 !important;margin: 0 auto !important; margin-bottom: 20px !important; text-align: justify !important;}
</style>
@stop

@section('content')

    @include("frontend.partials.header")

    <div class="main-container">
    
        @include("frontend.partials.slider")      
         
        <section class="pd-md bg-light" id="aboutus">
            <div class="container-fluid">
               <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <!-- /col-xs-12 col-sm-12 col-md-2 -->
                  <div class="col-xs-12 col-sm-12 col-md-10 algn-center aboutus-text">
                    <h3 hidden>About The Company</h3>
                     <h2 class="und-line"> About</h2>
                     @if($page_content->about_textarea != '')
                        
                          {!! $page_content->about_textarea !!}
                        
                      @endif
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-1"></div>
                <!-- /col-xs-12 col-sm-12 col-md-2 -->
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
        </section>
         <!-- Gallery area -->
        <section class="pd-md bg-pattern" id="gallery">
           <div class="container">
              <div class="row mb-2">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <h2 class="und-line">Gallery</h2>
                  @if($page_content->gallery_text != '')
                    <p class="head">
                      {!! $page_content->gallery_text !!}
                    </p>
                  @endif
                </div>
              </div>

              <div class="row">

                @foreach($gallery_list as $gallery_list_val)
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-30">
                    
                    @if($gallery_list_val->cover != '')
                      <a href="{!! asset('public/frontend/img/no-image.png') !!}" data-lightbox="roadtrip">
                        <img class="img-responsive w-100" src="{!! asset($gallery_list_val->cover->source) !!}" alt="{!! $gallery_list_val->title !!}">
                      </a>
                    @else
                      <a href="https://via.placeholder.com/300/?text=theenglishchannel.com" data-lightbox="roadtrip">
                        <img class="img-responsive w-100" src="{!! asset('public/frontend/img/no-image.png') !!}" alt="{!! $gallery_list_val->title !!}">
                      </a>
                    @endif
                  </div>
                @endforeach

              </div>
              <!--end of row-->
           </div>
           <!--end of container-->
        </section>
         <!-- Contact Us -->
        <section class="algn-center" id="contactus">
          <div class="container">
             <div class="row">
                <div class="col-md-10 col-md-offset-1">
                   <h2 class="und-line">Contact Us</h2>
                    @if($page_content->contactus_text != '')
                     <p class="head">
                       {!! $page_content->contactus_text !!}
                     </p>
                    @endif
                </div>
             </div>
             <!--end of row-->
             <div class="row mt-60">
              <div class="col-md-12 text-center">
                <div class="col-sm-4 contact-item">
                  <span class="font-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                  <p class="head-info">{!! $settings_date->contact_phone !!}</p>
                </div>
                <div class="col-sm-4 contact-item">
                  <span class="font-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                  <p class="head-info">{!! $settings_date->contact_address !!}</p>
                </div>
                <div class="col-sm-4 contact-item">
                  <span class="font-icon"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                  <p class="head-info"><a href="mailto:{!! $settings_date->admin_email !!}">{!! $settings_date->admin_email !!}</a></p>
                </div>
              </div><!-- / -->
             </div><!-- /row -->
             <div class="row mt-30" hidden>
              <div class="col-md-8 col-md-offset-2 mt-40">
                <form id="contact-form" class="form form-contact">
                  <div class="col-md-12">
                    <input id="input-name" name="name" type="text" placeholder="Name*" required="" class="form-control input-md">
                  </div>
                  <div class="col-md-6">
                    <input id="input-email" name="email" type="email" placeholder="Email*" required="" class="form-control input-md">
                  </div>
                  <div class="col-md-6">
                    <input id="input-company" name="company" type="text" placeholder="Company" class="form-control input-md">
                  </div>
                  <div class="col-md-12">
                    <textarea id="input-message" name="message" placeholder="Message*" required="" class="form-control input-md" rows="4"></textarea>
                  </div>
                  <div class="col-md-6">
                    <div id="send-result" class="mt-20"></div>
                  </div>
                  <div class="col-md-6 text-right">
                    <a href="#" class="btn btn-outline">Send message</a>
                  </div>
                </form>
              </div><!-- /col-md-8 col-md-offset-2 mt-40 -->
             </div><!-- /row -->
          </div>
          <!--end of container-->
        </section>
         <!-- map and location -->
        <section class="map" hidden>
            <div class="google-map js-active">
              <div class="map-canvas">
                <div id="map" style="width:100%;height:500px"></div>
              </div><!-- /map-canvas -->
              <div class="map-section">
                <div class="map-toggle">
                  <div class="toggle-text alt-font">
                    <div class="toggle-open">Locate us on map<i class="fa fa-angle-down"></i></div>
                    <div class="toggle-close" hidden>Close the map<i class="fa fa-angle-up"></i></div>
                  </div>
                </div>
              </div>
            </div><!-- /google-map -->
        </section>

        @include("frontend.partials.footer") 

    </div>

@stop

@section('pageleveljs')

@stop