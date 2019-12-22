<h2>About Us</h2>
<div class="col-md-12">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-2"><label class="control-label">About Text:  </label></div>
            <div class="col-md-10">
                {!! Form::textarea('about_textarea', null, array('class' => 'form-control ckeditor', 'placeholder' => 'About Text', 'id' => 'about_textarea', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<h2>Gallery</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Gallery Text :   </label></div>
            <div class="col-md-7">
                 {!! Form::text('gallery_text', null, array('class' => 'form-control', 'placeholder' => 'Gallery Text' , 'id' => 'gallery_text', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Contact Us</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Contact Text :   </label></div>
            <div class="col-md-7">
                 {!! Form::text('contactus_text', null, array('class' => 'form-control', 'placeholder' => 'Contact Text' , 'id' => 'contactus_text', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Student</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Student Text 1 :     </label></div>
            <div class="col-md-7">
                {!! Form::text('student_text_1', null, array('class' => 'form-control', 'placeholder' => 'Student Text 1' , 'id' => 'student_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Student Text 2 :     </label></div>
            <div class="col-md-7">
                 {!! Form::text('student_text_2', null, array('class' => 'form-control', 'placeholder' => 'Student Text 2' , 'id' => 'student_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Blog</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Blog Text 1 :    </label></div>
            <div class="col-md-7">
                {!! Form::text('blog_text_1', null, array('class' => 'form-control', 'placeholder' => 'Blog Text 1' , 'id' => 'blog_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Blog Text 2 :    </label></div>
            <div class="col-md-7">
                 {!! Form::text('blog_text_2', null, array('class' => 'form-control', 'placeholder' => 'Blog Text 2' , 'id' => 'blog_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>Blog Detail</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Blog Detail Text 1 :     </label></div>
            <div class="col-md-7">
                {!! Form::text('blog_detail_text_1', null, array('class' => 'form-control', 'placeholder' => 'Blog Detail Text 1' , 'id' => 'blog_detail_text_1', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Blog Detail Text 2 :     </label></div>
            <div class="col-md-7">
                 {!! Form::text('blog_detail_text_2', null, array('class' => 'form-control', 'placeholder' => 'Blog Detail Text 2' , 'id' => 'blog_detail_text_2', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<h2>IELTS Form</h2>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Date :   </label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_date', null, array('class' => 'form-control', 'placeholder' => 'September 23rd, 2018 and October 7th, 2018' , 'id' => 'ielts_date', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Time :   </label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_time', null, array('class' => 'form-control', 'placeholder' => '10.00am to 4.00pm' , 'id' => 'ielts_time', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Address :    </label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_address', null, array('class' => 'form-control', 'placeholder' => 'Address' , 'id' => 'ielts_address', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Contact Number :     </label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_contact_number', null, array('class' => 'form-control', 'placeholder' => 'Contact Number' , 'id' => 'ielts_contact_number', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email :  </label></div>
            <div class="col-md-7">
                 {!! Form::text('ielts_contact_email', null, array('class' => 'form-control', 'placeholder' => 'Email' , 'id' => 'ielts_contact_email', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Book Your Seat :     </label></div>
            <div class="col-md-7">
                {!! Form::text('ielts_book_seat', null, array('class' => 'form-control', 'placeholder' => 'Book Your Seat' , 'id' => 'ielts_book_seat', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="row margin-bottom-5">
    <div class="col-md-5"><label class="control-label"></label></div>
    <div class="col-md-4">
        <button type="submit" class="btn green-jungle btn-outline btn-circle" tabindex="{!! $index++ !!}" id="submit_btn">
            <i class="fa fa-save"></i> Save
        </button>
    </div>
</div>