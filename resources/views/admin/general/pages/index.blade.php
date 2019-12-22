@extends('admin.master')

@section('pagelevelcss')
    <link href="{!! asset('public/adminpanel/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css"/>
@stop

@section('breadcrumb')
    <li>
        <a href="{!! URL::route('admin.home') !!}">{!! trans($lang.'breadcrumb_home_lbl') !!}</a>
    </li>
    <li>{!! trans($lang.'breadcrumb_list_lbl') !!}</li>
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
                                <a href="{!! URL::route('admin.general.pages.create') !!}" class="btn green-turquoise btn-outline">
                                    <i class="fa fa-plus"></i>
                                    {!! trans($lang.'add_btn_lbl') !!}
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table">
                                <table class="table table-hover table-light" id="administrators_list_tbl">
                                    <thead>
                                        <tr class="uppercase">
                                            <th width="5%"> # </th>
                                            <th width="60%"> {!! trans($lang.'title_clmn_lbl') !!} </th>
                                            <th width="15%"> {!! trans($lang.'status_clmn_lbl') !!} </th>
                                            <th width="20%"> {!! trans($lang.'action_clmn_lbl') !!} </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('pageleveljs')
    <script src="{!! asset('public/adminpanel/global/plugins/datatables/media/js/jquery.dataTables.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('public/adminpanel/global/plugins/bootbox/bootbox.min.js') !!}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            loaduserlist();
        });

        function loaduserlist() {
            $('#administrators_list_tbl').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! URL::route('admin.general.pages.getlist') !!}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        }

        function deleteRow(id) {
            bootbox.dialog({
                message : "{!! trans($lang.'delete_question_lbl') !!}",
                title : "{!! trans($lang.'delete_question_title') !!}",
                buttons: {
                    success: {
                        label: "{!! trans($lang.'delete_yes_lbl') !!}",
                        className: "btn green-jungle btn-outline btn-circle active",
                        callback: function() {
                            window.location = $("#"+id).data('url');
                        }
                    },
                    danger: {
                        label: "{!! trans($lang.'delete_no_lbl') !!}",
                        className: "btn dark btn-outline btn-circle"
                    }
                }
            });

            return false;
        }
    </script>
@stop