<!-- BEGIN CORE PLUGINS -->
<script src="{!! asset('public/adminpanel/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/js.cookie.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
<script src="{{ asset('public/adminpanel/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/adminpanel/global/plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{!! asset('public/adminpanel/global/plugins/morris/morris.min.js') !!}" type="text/javascript"></script>
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{!! asset('public/adminpanel/global/scripts/app.min.js') !!}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{!! asset('public/adminpanel/pages/scripts/dashboard.min.js') !!}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{!! asset('public/adminpanel/layouts/layout6/scripts/layout.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/layouts/global/scripts/quick-sidebar.min.js') !!}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        displayNotifications();
    });

    function displayNotifications(){
        toastr.options.closeButton = true;
        toastr.options.timeOut = 10000;
        if(jQuery('#flashsuccess').length != 0){
            toastr.success(jQuery('#flashsuccess').html())
        } else if(jQuery('#flasherror').length != 0){
            toastr.error(jQuery('#flasherror').html())
        }
    }

    function removeimage(field_name, div_name, base_table, base_column, base_value, element) {
        var media_id = $('#'+field_name).val();
        
        if(media_id == '') {
            $("#"+div_name).removeClass('fileinput-exists').addClass('fileinput-new');
            $("#"+div_name).find('img').remove();
        } else {
            bootbox.dialog({
                message : "Are you sure want to delete this Image? Once it done, it cannot be revert.",
                title : "Confirm Delete Action",
                buttons: {
                    success: {
                        label: "Yes",
                        className: "btn green-jungle btn-outline btn-circle active",
                        callback: function() {
                            $.ajax({
                                type : 'POST',
                                url : '{!! URL::route('admin.common.remove.image') !!}',
                                data: { 'media_id' : media_id, 'base_table' : base_table, 'base_column' : base_column, 'base_value' : base_value } ,
                               
                                success: function(response) {
                                    if('remove-image' in response) {
                                        if(response.reqstatus=='done') {
                                            $('#'+field_name).val('');
                                            $("#"+div_name).removeClass('fileinput-exists').addClass('fileinput-new');
                                            $("#"+div_name).find('img').remove();
                                        } else if(response.reqstatus == 'error') {
                                            bootbox.alert(remove_error);
                                        }
                                    } else {
                                        bootbox.alert(remove_error);
                                    }
                                },
                                error : function(XMLHttpRequest, textStatus, errorThrown) {
                                    bootbox.alert(remove_error);
                                }
                            });
                        }
                    },
                    danger: {
                        label: "No",
                        className: "btn dark btn-outline btn-circle"
                    }
                }
            });
        }
    }

</script>
