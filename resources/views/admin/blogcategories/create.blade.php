@extends('admin.master')

@section('pagelevelcss')
    <link href="{!! asset('public/adminpanel/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('public/adminpanel/global/plugins/datatables/plugins/bootstrap/   dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css"/>
@stop

@section('breadcrumb')
    <li>
        <a href="{!! URL::route('admin.home') !!}">Home</a>
    </li>
    <li>{!! $title !!}</li>
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
                            <a href="{!! URL::route('admin.blogcategories.index') !!}" class="btn green-turquoise btn-outline">
                                Back 
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        {!! Form::model($record, array('route' => array('admin.blogcategories.store') , 'class' => 'form-horizontal', 'id' => 'add_blog_categories', 'files' => true))  !!}
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
    <script src="{!! asset('public/adminpanel/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/additional-methods.js') !!}" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            var form1 = $('#add_blog_categories');
            var error1 = $('.alert-danger', form1);
            $("#add_blog_categories").validate({
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
                    category_name   : {
                        required    : true,
                        maxlength   : 145
                    }
                },
                messages : {
                     category_name  : {
                        required    : 'Name is required field.',
                        maxlength   : 'Max 145 characters allowed.'
                    }
                }
            });

        //code for submit data on enter form controls
            $('#add_blog_categories').find('input').keypress(function(e) {
                 if(e.which == 10 || e.which == 13) {
                      $("#submit_btn").trigger('click');
                 }
            });
        });

    </script>

@stop
