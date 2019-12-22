
<div class="modal fade" id="myModalCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inquiry</h4>
            </div>
            <div class="modal-body">

                  {!! Form::open(array('id' => 'formCategory', 'class' => 'form-horizontal', 'files' => true))  !!}
                    <div class="form-group">
                      <div class="col-md-12">
                        <!-- <label for="first_name">Product<span class="error">*</span>:</label> -->

                        <input type="hidden" name="cat_in_vendor_id" id="cat_in_vendor_id" value="">

                        <input type="hidden" name="cat_in_category_id" id="cat_in_category_id" value="">

                        <input type="hidden" name="cat_in_sub_category_id" id="cat_in_sub_category_id" value="">

                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="first_name">First Name<span class="error">*</span>:</label>
                        {!! Form::text('cat_in_first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'cat_in_first_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="last_name">Last Name<span class="error">*</span>:</label>
                        {!! Form::text('cat_in_last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'cat_in_last_name', 'maxlength' => '90' )) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="email">Email<span class="error">*</span>:</label>
                        {!! Form::text('cat_in_email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'cat_in_email', 'maxlength' => '90' )) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="mobile_no">Mobile<span class="error">*</span>:</label>
                        {!! Form::number('cat_in_mobile_no', null, array('class' => 'form-control', 'placeholder' => 'Mobile', 'id' => 'cat_in_mobile_no', 'maxlength' => '90' )) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="address_1">Address<span class="error">*</span>:</label>
                        {!! Form::text('cat_in_address_1', null, array('class' => 'form-control', 'placeholder' => 'Address', 'id' => 'cat_in_address_1', 'maxlength' => '500' )) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label for="comments">Comments<span class="error">*</span>:</label>
                        {!! Form::textarea('cat_in_comments', null, array('class' => 'form-control', 'placeholder' => 'Comments', 'id' => 'cat_in_comments', 'maxlength' => '500', 'rows' => '2' )) !!}
                        </textarea>
                      </div>
                    </div>
                    <button type="submit" id="addCategory" class="btn btn-default">Submit</button>
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


  $(document).on('click', '.myModalCategory', function () {
      
    var cat_in_vendor_id = $(this).data('proid');          
    $('#cat_in_vendor_id').val(cat_in_vendor_id);

    var cat_in_category_id = $(this).data('catid');          
    $('#cat_in_category_id').val(cat_in_category_id);

    var cat_in_sub_category_id = $(this).data('subcatid');          
    $('#cat_in_sub_category_id').val(cat_in_sub_category_id);

  });

  $("#formCategory").validate({
    rules: {
      cat_in_first_name: {
        required: true,
        maxlength: 90
      },
      cat_in_last_name: {
        required: true,
        maxlength: 90
      },
      cat_in_mobile_no: {
        required: true,
        number: true
      },
      cat_in_address_1: {
        required: true
      },
      cat_in_comments: {
        required: true
      },
      cat_in_email   : {
          required    : true,
          email : true,
          maxlength : 145
      }
    },
    messages: {
      cat_in_first_name: {
        required: "First Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      cat_in_last_name: {
        required: "Last Name is required field.",
        maxlength: "Max 90 characters allowed."
      },
      cat_in_mobile_no: {
        required: "Mobile is required field.",
      },
      cat_in_address_1: {
        required: "Address is required field.",
      },
      cat_in_comments: {
        required: "Comments is required field.",
      },
      cat_in_email  : {
          required : "Email is required field.",
          email : "Invalid Email.",
          maxlength : "Max 145 characters allowed."
      }
    },

    submitHandler: function() {

      // $("#addCategory").click(function() {
          $(".modalloader").show();
          event.preventDefault();

          var cat_in_vendor_id     = ' ';
          if($('#cat_in_vendor_id').val() != ''){
              var cat_in_vendor_id     = $('#cat_in_vendor_id').val();
          }
          var cat_in_category_id     = ' ';
          if($('#cat_in_category_id').val() != ''){
              var cat_in_category_id     = $('#cat_in_category_id').val();
          }
          var cat_in_sub_category_id     = ' ';
          if($('#cat_in_sub_category_id').val() != ''){
              var cat_in_sub_category_id     = $('#cat_in_sub_category_id').val();
          }
          var first_name          = $('#cat_in_first_name').val();
          var last_name           = $('#cat_in_last_name').val();
          var email               = $('#cat_in_email').val();
          var mobile_no           = $('#cat_in_mobile_no').val();
          var address_1           = $('#cat_in_address_1').val();
          var comments            = $('#cat_in_comments').val();

          var ajax_url = '{!! route("common.inquiry") !!}';

          $.ajax({
              url: ajax_url,
              type: 'POST',
              data: {
                  _token              : "{{ csrf_token() }}",
                  'vendor_id'         : cat_in_vendor_id,
                  'category_id'       : cat_in_category_id,
                  'sub_category_id'   : cat_in_sub_category_id,
                  'first_name'        : first_name,
                  'last_name'         : last_name,
                  'email'             : email,
                  'mobile_no'         : mobile_no,
                  'address_1'         : address_1,
                  'comments'          : comments
              },
              success: function (result) {

                  // alert('done');
                  $('#myModalCategory').modal('hide');

                  $(".modalloader").hide();

                  $('#cat_in_first_name').val('');
                  $('#cat_in_last_name').val('');
                  $('#cat_in_email').val('');
                  $('#cat_in_mobile_no').val('');
                  $('#cat_in_address_1').val('');
                  $('#cat_in_comments').val('');

              },
              error: function (result) {
                  // alert('opps');
                  $('#myModalCategory').modal('hide');

                  $(".modalloader").hide();

                  $('#cat_in_first_name').val('');
                  $('#cat_in_last_name').val('');
                  $('#cat_in_email').val('');
                  $('#cat_in_mobile_no').val('');
                  $('#cat_in_address_1').val('');
                  $('#cat_in_comments').val('');
              }
          });
      // });
    }

  });
});

</script>
