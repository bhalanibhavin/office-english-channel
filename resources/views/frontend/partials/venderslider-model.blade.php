
<div class="modal fade" id="myModalSlider" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inquiry</h4>
      </div>
      <div class="modal-body">

        {!! Form::open(array('id' => 'formmyModalSlider', 'class' => 'form-horizontal', 'files' => true))  !!}

        <div class="form-group">
          <div class="col-md-12">
            <!-- <label for="first_name">Product<span class="error">*</span>:</label> -->

            <input type="hidden" name="vsvendor_id" id="vsvendor_id" value="">

            <input type="hidden" name="vscategory_id" id="vscategory_id" value="">

            <input type="hidden" name="vssub_category_id" id="vssub_category_id" value="">

          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <label for="first_name">First Name<span class="error">*</span>:</label>
            {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="last_name">Last Name<span class="error">*</span>:</label>
            {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="email">Email<span class="error">*</span>:</label>
            {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="mobile_no">Mobile<span class="error">*</span>:</label>
            {!! Form::number('mobile_no', null, array('class' => 'form-control', 'placeholder' => 'Mobile', 'id' => 'mobile_no', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="address_1">Address<span class="error">*</span>:</label>
            {!! Form::text('address_1', null, array('class' => 'form-control', 'placeholder' => 'Address', 'id' => 'address_1', 'maxlength' => '500' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="comments">Comments<span class="error">*</span>:</label>
            {!! Form::textarea('comments', null, array('class' => 'form-control', 'placeholder' => 'Comments', 'id' => 'comments', 'maxlength' => '500', 'rows' => '2' )) !!}
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

  $(document).on('click', '.myModalSlider', function () {
      
    var vsvendor_id = $(this).data('vsproid');          
    $('#vsvendor_id').val(vsvendor_id);

    var vscategory_id = $(this).data('vscatid');          
    $('#vscategory_id').val(vscategory_id);

    var vssub_category_id = $(this).data('vssubcatid');          
    $('#vssub_category_id').val(vssub_category_id);

  });

  $("#formmyModalSlider").validate({
    rules: {
      first_name: {
        required: true,
        maxlength: 90
      },
      last_name: {
        required: true,
        maxlength: 90
      },
      mobile_no: {
        required: true,
        number: true
      },
      address_1: {
        required: true
      },
      comments: {
        required: true
      },
      email   : {
          required    : true,
          email : true,
          maxlength : 145
      }
    },
    messages: {
      first_name: {
        required: "First Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      last_name: {
        required: "Last Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      mobile_no: {
        required: "Mobile is required field.",
      },
      address_1: {
        required: "Address is required field.",
      },
      comments: {
        required: "Comments is required field.",
      },
      email  : {
          required : "Email is required field.",
          email : "Invalid Email.",
          maxlength : "Max 145 characters allowed."
      }
    },

    submitHandler: function() {

        // $("#addVender").click(function() {
          $(".modalloader").show();
          event.preventDefault();

          var vsvendor_id     = ' ';
          if($('#vsvendor_id').val() != ''){
              var vsvendor_id     = $('#vsvendor_id').val();
          }
          var vscategory_id     = ' ';
          if($('#vscategory_id').val() != ''){
              var vscategory_id     = $('#vscategory_id').val();
          }
          var vssub_category_id     = ' ';
          if($('#vssub_category_id').val() != ''){
              var vssub_category_id     = $('#vssub_category_id').val();
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
          var first_name          = $('#first_name').val();
          var last_name           = $('#last_name').val();
          var email               = $('#email').val();
          var mobile_no           = $('#mobile_no').val();
          var address_1           = $('#address_1').val();
          var comments            = $('#comments').val();

          var ajax_url = '{!! route("common.inquiry") !!}';

          $.ajax({
            url: ajax_url,
            type: 'POST',
            data: {
              _token              : "{{ csrf_token() }}",
              'vendor_id'         : vsvendor_id,
              'category_id'       : vscategory_id,
              'sub_category_id'   : vssub_category_id,
              'first_name'        : first_name,
              'last_name'         : last_name,
              'email'             : email,
              'mobile_no'         : mobile_no,
              'address_1'         : address_1,
              'comments'          : comments
            },
            success: function (result) {

              // alert('done');
              $('#myModalSlider').modal('hide');

              $(".modalloader").hide();
              // $(".modalloader").hide();
              // setTimeout('$(".modalloader").hide()',15000);

              $('#first_name').val('');
              $('#last_name').val('');
              $('#email').val('');
              $('#mobile_no').val('');
              $('#address_1').val('');
              $('#comments').val('');

            },
            error: function (result) {
              // alert('opps');
              $('#myModalSlider').modal('hide');

              $(".modalloader").hide();

              $('#first_name').val('');
              $('#last_name').val('');
              $('#email').val('');
              $('#mobile_no').val('');
              $('#address_1').val('');
              $('#comments').val('');
            }
          });
        // });
    }

  });
});

</script>
