
<div class="modal fade" id="myModalSliderSingle" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inquiry</h4>
      </div>
      <div class="modal-body">

        {!! Form::open(array('id' => 'formmyModalSliderSingle', 'class' => 'form-horizontal', 'files' => true))  !!}

        <div class="form-group">
          <div class="col-md-12">
            <!-- <label for="first_name">Product<span class="error">*</span>:</label> -->

            <input type="hidden" name="ssvendor_id" id="ssvendor_id" value="">

            <input type="hidden" name="sscategory_id" id="sscategory_id" value="">

            <input type="hidden" name="sssub_category_id" id="sssub_category_id" value="">

          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <label for="ssfirst_name">First Name<span class="error">*</span>:</label>
            {!! Form::text('ssfirst_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'ssfirst_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="sslast_name">Last Name<span class="error">*</span>:</label>
            {!! Form::text('sslast_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'sslast_name', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="ssemail">Email<span class="error">*</span>:</label>
            {!! Form::text('ssemail', null, array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'ssemail', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="ssmobile_no">Mobile<span class="error">*</span>:</label>
            {!! Form::number('ssmobile_no', null, array('class' => 'form-control', 'placeholder' => 'Mobile', 'id' => 'ssmobile_no', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="ssaddress_1">Address<span class="error">*</span>:</label>
            {!! Form::text('ssaddress_1', null, array('class' => 'form-control', 'placeholder' => 'Address', 'id' => 'ssaddress_1', 'maxlength' => '500' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="sscomments">Comments<span class="error">*</span>:</label>
            {!! Form::textarea('sscomments', null, array('class' => 'form-control', 'placeholder' => 'Comments', 'id' => 'sscomments', 'maxlength' => '500', 'rows' => '2' )) !!}
          </div>
        </textarea>
      </div>
      <button type="submit" id="addVender" class="btn btn-default">Submit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      <div class="modalloader" style="display: none">
          <div class="centerloader">
            <div class="loader-with margin-left-235">
              <img alt="" src="{!! asset('public/frontend/loader/loader.gif') !!}" />
            </div>
              <p style="color: green; text-align: center;">your enquiry has been submitted successfully.</p>
          </div>
      </div>

      {!! Form::close() !!}

    </div>
  </div>
</div>
</div>


<script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
<script src="{!! asset('public/adminpanel/global/plugins/jquery-validation/js/additional-methods.js') !!}" type="text/javascript"></script>


<script type="text/javascript">

$(function() {

  $(document).on('click', '.myModalSliderSingle', function () {
      
    var ssvendor_id = $(this).data('ssproid');          
    $('#ssvendor_id').val(ssvendor_id);

    var sscategory_id = $(this).data('sscatid');          
    $('#sscategory_id').val(sscategory_id);

    var sssub_category_id = $(this).data('sssubcatid');          
    $('#sssub_category_id').val(sssub_category_id);

  });

  $("#formmyModalSliderSingle").validate({
    rules: {
      ssfirst_name: {
        required: true,
        maxlength: 90
      },
      sslast_name: {
        required: true,
        maxlength: 90
      },
      ssmobile_no: {
        required: true,
        number: true
      },
      ssaddress_1: {
        required: true
      },
      sscomments: {
        required: true
      },
      ssemail   : {
          required    : true,
          email : true,
          maxlength : 145
      }
    },
    messages: {
      ssfirst_name: {
        required: "First Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      sslast_name: {
        required: "Last Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      ssmobile_no: {
        required: "Mobile is required field.",
      },
      ssaddress_1: {
        required: "Address is required field.",
      },
      sscomments: {
        required: "Comments is required field.",
      },
      ssemail  : {
          required : "Email is required field.",
          email : "Invalid Email.",
          maxlength : "Max 145 characters allowed."
      }
    },

    submitHandler: function() {

        // $("#addVender").click(function() {
          $(".modalloader").show();
          event.preventDefault();

          var ssvendor_id     = ' ';
          if($('#ssvendor_id').val() != ''){
              var ssvendor_id     = $('#ssvendor_id').val();
          }
          var sscategory_id     = ' ';
          if($('#sscategory_id').val() != ''){
              var sscategory_id     = $('#sscategory_id').val();
          }
          var sssub_category_id     = ' ';
          if($('#sssub_category_id').val() != ''){
              var sssub_category_id     = $('#sssub_category_id').val();
          }



          // var vendor_id           = $('#vendor_id').val();
          // var category_id     = ' ';
          // if($('#category_id').val() != ''){
          //   var category_id     = $('#category_id').val();
          // }
          // var sub_category_id     = ' ';
          // if($('#sub_category_id').val() != ''){
          //   var sub_category_id     = $('#sub_category_id').val();
          // }
          var first_name          = $('#ssfirst_name').val();
          var last_name           = $('#sslast_name').val();
          var email               = $('#ssemail').val();
          var mobile_no           = $('#ssmobile_no').val();
          var address_1           = $('#ssaddress_1').val();
          var comments            = $('#sscomments').val();

          var ajax_url = '{!! route("common.inquiry") !!}';

          $.ajax({
            url: ajax_url,
            type: 'POST',
            data: {
              _token              : "{{ csrf_token() }}",
              'vendor_id'         : ssvendor_id,
              'category_id'       : sscategory_id,
              'sub_category_id'   : sssub_category_id,
              'first_name'        : first_name,
              'last_name'         : last_name,
              'email'             : email,
              'mobile_no'         : mobile_no,
              'address_1'         : address_1,
              'comments'          : comments
            },
            success: function (result) {

              // alert('done');
              $('#myModalSliderSingle').modal('hide');

              $(".modalloader").hide();
              // $(".modalloader").hide();
              // setTimeout('$(".modalloader").hide()',15000);

              $('#ssfirst_name').val('');
              $('#sslast_name').val('');
              $('#ssemail').val('');
              $('#ssmobile_no').val('');
              $('#ssaddress_1').val('');
              $('#sscomments').val('');

            },
            error: function (result) {
              // alert('opps');
              $('#myModalSliderSingle').modal('hide');

              $(".modalloader").hide();

              $('#ssfirst_name').val('');
              $('#sslast_name').val('');
              $('#ssemail').val('');
              $('#ssmobile_no').val('');
              $('#ssaddress_1').val('');
              $('#sscomments').val('');
            }
          });
        // });
    }

  });
});

</script>
