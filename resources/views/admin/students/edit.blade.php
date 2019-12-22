@extends('admin.master')

@section('pagelevelcss')
    <link href="{!! asset('public/adminpanel/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('public/adminpanel/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css"/>
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
                            <a href="{!! URL::route('admin.students.index') !!}" class="btn green-turquoise btn-outline">
                                Back 
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        {!! Form::model($record, array('route' => array('admin.students.update') , 'class' => 'form-horizontal', 'id' => 'add_students', 'files' => true))  !!}
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
            var form1 = $('#add_students');
            var error1 = $('.alert-danger', form1);
            $("#add_students").validate({
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
                    first_name   : {
                        required    : true,
                        maxlength   : 90
                    },
                    last_name   : {
                        required    : true,
                        maxlength   : 90
                    },
                    course   : {
                        required    : true
                    }
                },
                messages : {
                    first_name  : {
                        required    : 'First Name is required field.',
                        maxlength   : 'Max 90 characters allowed.'
                    },
                    last_name  : {
                        required    : 'Last Name is required field.',
                        maxlength   : 'Max 90 characters allowed.'
                    },
                    course  : {
                        required    : 'Course is required field.'
                    }
                }
            });

        //code for submit data on enter form controls
            $('#add_students').find('input').keypress(function(e) {
                 if(e.which == 10 || e.which == 13) {
                      $("#submit_btn").trigger('click');
                 }
            });
        });

    </script>

@stop
