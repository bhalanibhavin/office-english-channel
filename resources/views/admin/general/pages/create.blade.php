@extends('admin.master')

@section('pagelevelcss')
    <link href="{!! asset('public/adminpanel/global/plugins/bootstrap-summernote/summernote.css') !!}" rel="stylesheet" type="text/css" />
@stop

@section('breadcrumb')
    <li>
        <a href="{!! URL::route('admin.home') !!}">{!! trans($lang.'breadcrumb_home_lbl') !!}</a>
    </li>
    <li>
        <a href="{!! URL::route('admin.general.pages.index') !!}">{!! trans($lang.'breadcrumb_list_lbl') !!}</a>
    </li>
    <li>{!! trans($lang.'breadcrumb_create_lbl') !!}</li>
@stop

@section('content')
    <div class="page-content-inner">
        <div class="mt-content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-red sbold uppercase">{!! $title !!}</span>
                            </div>
                            <div class="actions">
                                <a href="{!! URL::route('admin.general.pages.index') !!}" class="btn blue-steel btn-outline">
                                    {!! trans($lang.'back_to_list_btn') !!} 
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            {!! Form::model($record, array('route' => array('admin.general.pages.store'), 'id' => 'add_pages', 'files' => true))  !!}
                                {!! Form::hidden('id') !!}
                                @include($view.'partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('pageleveljs')
    <script src="{!! asset('public/adminpanel/global/plugins/bootstrap-summernote/summernote.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/additional-methods.js') !!}" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){

            $('#description').summernote({
                height : 250
            });

            $("#title").keyup(function() {
                var title = $(this).val();
                title = title.toLowerCase();
                title = title.replace(/[^\w ]+/g,'');
                title = title.replace(/ +/g,'-');
                $("#slug").val(title);
            }); 

            var form1 = $('#add_pages');
            var error1 = $('.alert-danger', form1);
            $("#add_pages").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                invalidHandler: function (event, validator) { //display error alert on form submit
                    error1.show();
                    window.scrollTo(error1, -200);
                },
                highlight: function (element) { // hightlight error inputs
                    $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },
                success: function (label) {
                    label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },
                rules : {
                    title    : {
                        required    : true,
                        maxlength   : 145
                    }, 
                    meta_title : {
                        required : true
                    },
                    post_category_id : {
                        required : true
                    }
                },
                messages : {
                    title    : {
                        required    : "{!! trans($lang.'title_req_err') !!} ",
                        maxlength   : "{!! trans($lang.'title_max_err') !!} "
                    }, 
                    meta_title : {
                        required    : "{!! trans($lang.'meta_title_req_err') !!} ",
                    }, 
                    post_category_id : {
                        required    : "{!! trans($lang.'post_category_id_req_err') !!} ",
                    }
                }
            });

        //code for submit data on enter form controls
            $('#add_pages').find('input').keypress(function(e) {
                 if(e.which == 10 || e.which == 13) {
                      $("#submit_btn").trigger('click');
                 }
            });
        });

    </script>
@stop