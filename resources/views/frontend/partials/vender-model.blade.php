
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inquiry</h4>
      </div>
      <div class="modal-body">

        {!! Form::open(array('id' => 'formmyModal', 'class' => 'form-horizontal', 'files' => true))  !!}

        <div class="form-group">
          <div class="col-md-12">
            <!-- <label for="first_name">Product<span class="error">*</span>:</label> -->

            <input type="hidden" name="vendor_id" id="vendor_id" value="">

            <input type="hidden" name="category_id" id="category_id" value="">

            <input type="hidden" name="sub_category_id" id="sub_category_id" value="">

          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <label for="vfirst_name">First Name<span class="error">*</span>:</label>
            {!! Form::text('vfirst_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'vfirst_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="vlast_name">Last Name<span class="error">*</span>:</label>
            {!! Form::text('vlast_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'vlast_name', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="vemail">Email<span class="error">*</span>:</label>
            {!! Form::text('vemail', null, array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'vemail', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="vmobile_no">Mobile<span class="error">*</span>:</label>
            {!! Form::number('vmobile_no', null, array('class' => 'form-control', 'placeholder' => 'Mobile', 'id' => 'vmobile_no', 'maxlength' => '90' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="vaddress_1">Address<span class="error">*</span>:</label>
            {!! Form::text('vaddress_1', null, array('class' => 'form-control', 'placeholder' => 'Address', 'id' => 'vaddress_1', 'maxlength' => '500' )) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="vcomments">Comments<span class="error">*</span>:</label>
            {!! Form::textarea('vcomments', null, array('class' => 'form-control', 'placeholder' => 'Comments', 'id' => 'vcomments', 'maxlength' => '500', 'rows' => '2' )) !!}
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

  $(document).on('click', '.myModal', function () {
      
    var vendor_id = $(this).data('vproid');          
    $('#vendor_id').val(vendor_id);

    var category_id = $(this).data('vcatid');          
    $('#category_id').val(category_id);

    var sub_category_id = $(this).data('vsubcatid');          
    $('#sub_category_id').val(sub_category_id);

  });

  $("#formmyModal").validate({
    rules: {
      vfirst_name: {
        required: true,
        maxlength: 90
      },
      vlast_name: {
        required: true,
        maxlength: 90
      },
      vmobile_no: {
        required: true,
        number: true
      },
      vaddress_1: {
        required: true
      },
      vcomments: {
        required: true
      },
      vemail   : {
          required    : true,
          email : true,
          maxlength : 145
      }
    },
    messages: {
      vfirst_name: {
        required: "First Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      vlast_name: {
        required: "Last Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      vmobile_no: {
        required: "Mobile is required field.",
      },
      vaddress_1: {
        required: "Address is required field.",
      },
      vcomments: {
        required: "Comments is required field.",
      },
      vemail  : {
          required : "Email is required field.",
          email : "Invalid Email.",
          maxlength : "Max 145 characters allowed."
      }
    },

    submitHandler: function() {

        // $("#addVender").click(function() {
          $(".modalloader").show();
          event.preventDefault();

          var vendor_id     = ' ';
          if($('#vendor_id').val() != ''){
              var vendor_id     = $('#vendor_id').val();
          }
          var category_id     = ' ';
          if($('#category_id').val() != ''){
              var category_id     = $('#category_id').val();
          }
          var sub_category_id     = ' ';
          if($('#sub_category_id').val() != ''){
              var sub_category_id     = $('#sub_category_id').val();
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
          var first_name          = $('#vfirst_name').val();
          var last_name           = $('#vlast_name').val();
          var email               = $('#vemail').val();
          var mobile_no           = $('#vmobile_no').val();
          var address_1           = $('#vaddress_1').val();
          var comments            = $('#vcomments').val();

          var ajax_url = '{!! route("common.inquiry") !!}';

          $.ajax({
            url: ajax_url,
            type: 'POST',
            data: {
              _token              : "{{ csrf_token() }}",
              'vendor_id'         : vendor_id,
              'category_id'       : category_id,
              'sub_category_id'   : sub_category_id,
              'first_name'        : first_name,
              'last_name'         : last_name,
              'email'             : email,
              'mobile_no'         : mobile_no,
              'address_1'         : address_1,
              'comments'          : comments
            },
            success: function (result) {

              // alert('done');
              $('#myModal').modal('hide');

              $(".modalloader").hide();
              // $(".modalloader").hide();
              // setTimeout('$(".modalloader").hide()',15000);

              $('#vfirst_name').val('');
              $('#vlast_name').val('');
              $('#vemail').val('');
              $('#vmobile_no').val('');
              $('#vaddress_1').val('');
              $('#vcomments').val('');

            },
            error: function (result) {
              // alert('opps');
              $('#myModal').modal('hide');

              $(".modalloader").hide();

              $('#vfirst_name').val('');
              $('#vlast_name').val('');
              $('#vemail').val('');
              $('#vmobile_no').val('');
              $('#vaddress_1').val('');
              $('#vcomments').val('');
            }
          });
        // });
    }

  });
});

</script>
