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
                     <a href="{!! URL::route('common.home') !!}" class="page-scroll">
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
    
         
        <section class="arizona-hero pt-0">
          <div class="inner-arizona">
            <div class="parallax-window" data-parallax="scroll" data-image-src="{!! asset('public/frontend/img/arizona.jpg') !!}"></div>
          </div>
        </section>
        <section class="form-area section">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="bg-white shadow-sm pt-50 pb-50 pr-30 pl-30 radius-sm">
                  <div class="notes-title">
                    <h1 class="mb-1">Trial IELTS</h1>
                    <ul class="list-unstyled mb-1">
                      @if($page_content->ielts_date != '')
                        <li class="mb-5">Dates : {!! $page_content->ielts_date !!} </li>
                      @endif
                      @if($page_content->ielts_time != '')
                        <li>Timings : {!! $page_content->ielts_time !!}</li>
                      @endif
                    </ul>
                    @if($page_content->ielts_address != '')
                      <address>
                        Address: {!! $page_content->ielts_address !!}
                      </address>
                    @endif
                    <ul class="list-unstyled mb-2">
                      <li class="mb-5">@if($page_content->ielts_contact_number != '') Contact us at {!! $page_content->ielts_contact_number !!} @endif @if($page_content->ielts_contact_email != '') or Email us at <a href="mailto:{!! $page_content->ielts_contact_email !!}"> {!! $page_content->ielts_contact_email !!}</a>@endif </li>
                      @if($page_content->ielts_book_seat != '')
                        <li>Book Your Seat. {!! $page_content->ielts_book_seat !!}</li>
                      @endif
                    </ul>
                  </div>
                  <form class="reletive" action="{!! URL::to('save-trial-ielts')!!}" method="post" id="trial_ielts">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Full Name <abbr class="text-denger" title="title">*</abbr></h3>
                          <input id="input-name" required="" name="full_name" type="text" placeholder="Your Name" required="" class="form-control input-md">
                          <div class="in_error">  </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Email <abbr class="text-denger" title="title">*</abbr></h3>
                          <input id="email" name="email"  required="" type="email" placeholder="Your Email" required="" class="form-control input-md">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Contact Number <abbr class="text-denger" title="title">*</abbr></h3>
                          <input id="contact_number"  required="" name="contact_number" type="text" placeholder="Your Contact Number" required="" class="form-control input-md">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Module <abbr class="text-denger" title="title">*</abbr></h3>
                          <ul class="list-unstyled">
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="module" value="0" checked> <span class="label-text"> <em class="inner-checkbox">Academic</em></span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="module" value="1"> <span class="label-text"> <em class="inner-checkbox">General Training</em> </span>
                                </label>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Select your test date <abbr class="text-denger" title="title">*</abbr></h3>
                          <ul class="list-unstyled">
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="test_date" value="0" checked> <span class="label-text"> <em class="inner-checkbox">23rd September 2018 (Sunday)</em></span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="test_date" value="1"> <span class="label-text"> <em class="inner-checkbox">7th October 2018 (Sunday)</em> </span>
                                </label>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Exposure <abbr class="text-denger" title="title">*</abbr></h3>
                          <ul class="list-unstyled">
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="exposure" value="0" checked> <span class="label-text"> <em class="inner-checkbox">Fresher (in case you have never appeared for IELTS)</em></span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="radio" name="exposure" value="1"> <span class="label-text"> <em class="inner-checkbox">Repeater (in case you have appeared for IELTS atleast once.)</em> </span>
                                </label>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Exam Date (if booked) </h3>
                          <input type="date" required name="exam_date" class="form-control input-md">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6"></div>
                    </div>
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-2">
                          <h3 class="title-form">Reason for choosing Trial IELTS </h3>
                          <input type="text" required name="reason_choosing_ielts_ans" placeholder="Your Answer" class="form-control input-md">
                        </div>
                      </div>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group mb-2">
                          <h3 class="title-form">I want to be contacted with the payment details for the registration. Contact me via  <abbr class="text-denger" title="title">*</abbr></h3>
                          <ul class="list-unstyled">
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="checkbox"  data-error="#errNm1" name="payment_detail_contact[]" value="WhatsApp"> <span class="label-text"> WhatsApp</span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="checkbox" name="payment_detail_contact[]" value="Call"> <span class="label-text">Call</span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="checkbox" name="payment_detail_contact[]" value="Schedule-a-meeting"> <span class="label-text">Schedule a meeting</span>
                                </label>
                              </div>
                            </li>
                            <li>
                              <div class="form-check">
                                <label>
                                  <input type="checkbox" name="payment_detail_contact[]" value="Email"> <span class="label-text">Email</span>
                                </label>
                              </div>
                            </li>
                          </ul>

                          <div class="errorTxt">

                            <span id="errNm1"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6"></div>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" id="submit_btn" class="btn btn-outline submit-button">Submit</button>
                      </div>
                    </div>
                    <!-- row -->
                  </form>
                </div>
              </div>
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

            $("#trial_ielts").validate({
                rules : {
                    full_name    : {
                        required    : true
                    },
                    email : {
                      required    : true,
                      email       : true
                    },
                    contact_number : {
                      required    : true,
                      number      : true
                    },
                    exam_date : {
                      required    : false
                    },
                    reason_for_choosing : {
                      required    : false
                    },
                    "contact_me_via[]" : {
                      required    : true
                    },
                    "payment_detail_contact[]" : {
                      required    : true
                    }
                },
                messages : {
                    full_name    : {
                        required     : "Full Name field is required."
                    },
                    email : {
                      required    : "Email field is required.",
                      email       : "Please enter valid email address.",
                    },
                    contact_number : {
                      required    : "Contact number field is required.",
                      number      : "Please enter valid contact number."
                    },
                    "contact_me_via[]" : {
                      required    : "Contact me via field is required."
                    },
                    "payment_detail_contact[]" : {
                      required    : "Payment detail field is required."
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
            $('#trial_ielts').find('input').keypress(function(e) {
                 if(e.which == 10 || e.which == 13) {
                      $("#submit_btn").trigger('click');
                 }
            });
        });
    </script>
@stop