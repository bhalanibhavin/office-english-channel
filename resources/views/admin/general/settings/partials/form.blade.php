
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Admin Email: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('admin_email', null, array('class' => 'form-control', 'placeholder' => 'Admin Email' , 'id' => 'admin_email', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Contact Address: </label></div>
            <div class="col-md-7">
                {!! Form::text('contact_address', null, array('class' => 'form-control', 'placeholder' => 'Contact Address' , 'id' => 'contact_address', 'maxlength' => '255', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Facebook Url: </label></div>
            <div class="col-md-7">
                {!! Form::text('facebook_url', null, array('class' => 'form-control', 'placeholder' => 'Facebook Url' , 'id' => 'facebook_url', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Twitter Url: </label></div>
            <div class="col-md-7">
                {!! Form::text('twitter_url', null, array('class' => 'form-control', 'placeholder' => 'Twitter Url' , 'id' => 'twitter_url', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Linkedin Url: </label></div>
            <div class="col-md-7">
                {!! Form::text('linkedin_url', null, array('class' => 'form-control', 'placeholder' => 'Linkedin Url' , 'id' => 'linkedin_url', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Google Plus Url: </label></div>
            <div class="col-md-7">
                {!! Form::text('google_plus_url', null, array('class' => 'form-control', 'placeholder' => 'Google Plus Url' , 'id' => 'google_plus_url', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Contact Phone: </label></div>
            <div class="col-md-7">
                {!! Form::text('contact_phone', null, array('class' => 'form-control', 'placeholder' => 'Contact Phone' , 'id' => 'contact_phone', 'maxlength' => '90', 'tabindex' => $index++)) !!}
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