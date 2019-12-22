
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">First Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name' , 'id' => 'first_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Last Name:  <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email', 'maxlength' => '135', 'tabindex' => $index++)) !!}
            </div>      
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4">
                <label class="control-label">Status:</label>
            </div>
            <div class="col-md-7">
                <input type="checkbox" class="make-switch" name="status" id="status" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" data-size="small" value='1' @if($record->status=='1') {!! 'checked' !!} @endif tabindex="{!! $index !!}">
           </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Password: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::password('password', array('class' => 'form-control input-medium', 'placeholder' => 'Password', 'id' => 'password', 'tabindex' => $index++)) !!}
            </div>           
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Confirm Password: </label></div>
            <div class="col-md-7">
                {!! Form::password('con_password', array('class' => 'form-control input-medium', 'placeholder' => 'Confirm Password', 'id' => 'con_password', 'tabindex' => $index++)) !!}
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
        <a href="{!! URL::route('admin.administrators.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>