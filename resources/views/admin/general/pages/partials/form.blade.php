<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
        <div class="form-group form-md-line-input">
            {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => trans($lang.'title_lbl'), 'id' => 'title', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            <label for="form_control_1"> 
                {!! trans($lang.'title_lbl') !!} 
                <span class="required">*</span>
            </label>
        </div>
        
    </div>
</div>
<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">

        <div class="form-group form-md-line-input">
            {!! Form::text('slug', null, array('class' => 'form-control', 'placeholder' => trans($lang.'slug_lbl'), 'id' => 'slug', 'maxlength' => '145', 'readonly' => true, 'tabindex' => '2')) !!}
            <label for="form_control_1"> 
                {!! trans($lang.'slug_lbl') !!} 
            </label>
        </div>
        
    </div>
</div>

<div class="col-md-12" style="padding-left: 0px;">
    <div class="form-group form-md-radios">
        <label for="form_control_1" style="padding-bottom: 5px;"> 
            {!! trans($lang.'description_lbl') !!} 
        </label>
        {!! Form::textarea('description', null, [ 'class' => 'form-control', 'placeholder' => trans($lang.'description_lbl'), 'id' => 'description', 'maxlength' => '512', 'tabindex' => '15', 'style' => 'height:400px;' ]) !!}
    </div>
</div>

<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
        
        <div class="form-group form-md-line-input">
            {!! Form::text('meta_title', null, array('class' => 'form-control', 'placeholder' => trans($lang.'meta_title_lbl'), 'id' => 'meta_title', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            <label for="form_control_1"> 
                {!! trans($lang.'meta_title_lbl') !!} 
                <span class="required">*</span>
            </label>
        </div>
        <div class="form-group form-md-line-input">
            {!! Form::text('meta_tags', null, array('class' => 'form-control', 'placeholder' => trans($lang.'meta_tags_lbl'), 'id' => 'meta_tags', 'maxlength' => '145', 'tabindex' => $index++)) !!}
            <label for="form_control_1"> 
                {!! trans($lang.'meta_tags_lbl') !!}
            </label>
        </div>

        <div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
       
        <div class="form-group form-md-radios">
            <label for="status1">{!! trans($lang.'status_lbl') !!}:</label>
            <div class="md-radio-inline">
                <?php 
                    $radio1 = '';
                    $radio2 = '';
                    if($record->status == '1') {
                        $radio1 = 'checked';
                    } else {
                        $radio2 = 'checked';
                    }

                ?>
                <div class="md-radio">
                    <input type="radio" id="status1" name="status" value="1" class="md-radiobtn" {!! $radio1 !!}>
                    <label for="status1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_active_lbl') !!} </label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="status2" name="status" value="0" class="md-radiobtn" {!! $radio2 !!}>
                    <label for="status2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_inactive_lbl') !!} </label>
                </div>
            </div>
        </div>
        
    </div>
</div>

        <!-- <div class="form-group form-md-radios">
            <label for="status1">{!! trans($lang.'register_status_lbl') !!}:</label>
            <div class="md-radio-inline">
                <?php 
                    $radio1 = '';
                    $radio2 = '';
                    if($record->register_status == '1') {
                        $radio1 = 'checked';
                    } else {
                        $radio2 = 'checked';
                    }

                ?>
                <div class="md-radio">
                    <input type="radio" id="register_status1" name="register_status" value="1" class="md-radiobtn" {!! $radio1 !!}>
                    <label for="register_status1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_active_lbl') !!} </label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="register_status2" name="register_status" value="0" class="md-radiobtn" {!! $radio2 !!}>
                    <label for="register_status2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_inactive_lbl') !!} </label>
                </div>
            </div>
        </div> -->
        
    </div>
</div>

<div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">

        <div class="form-group form-md-line-input">
            {!! Form::textarea('meta_description', null, [ 'class' => 'form-control', 'placeholder' => trans($lang.'meta_description_lbl'), 'id' => 'meta_description', 'maxlength' => '512', 'tabindex' => '4', 'style' => 'height:212px;' ]) !!}
            <label for="form_control_1">{!! trans($lang.'meta_description_lbl') !!}
            </label>
        </div>

    </div>
</div>

<!-- <div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
       
        <div class="form-group form-md-radios">
            <label for="status1">{!! trans($lang.'newsletter_status_lbl') !!}:</label>
            <div class="md-radio-inline">
                <?php 
                    $radio1 = '';
                    $radio2 = '';
                    if($record->newsletter_status == '1') {
                        $radio1 = 'checked';
                    } else {
                        $radio2 = 'checked';
                    }

                ?>
                <div class="md-radio">
                    <input type="radio" id="newsletter_status1" name="newsletter_status" value="1" class="md-radiobtn" {!! $radio1 !!}>
                    <label for="newsletter_status1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_active_lbl') !!} </label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="newsletter_status2" name="newsletter_status" value="0" class="md-radiobtn" {!! $radio2 !!}>
                    <label for="newsletter_status2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_inactive_lbl') !!} </label>
                </div>
            </div>
        </div>
        
    </div>
</div> -->

<!-- <div class="col-md-6" style="padding-left: 0px;">
    <div class="form-body">
       
        <div class="form-group form-md-radios">
            <label for="status1">{!! trans($lang.'contact_status_lbl') !!}:</label>
            <div class="md-radio-inline">
                <?php 
                    $radio1 = '';
                    $radio2 = '';
                    if($record->contact_status == '1') {
                        $radio1 = 'checked';
                    } else {
                        $radio2 = 'checked';
                    }

                ?>
                <div class="md-radio">
                    <input type="radio" id="contact_status1" name="contact_status" value="1" class="md-radiobtn" {!! $radio1 !!}>
                    <label for="contact_status1">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_active_lbl') !!} </label>
                </div>
                <div class="md-radio">
                    <input type="radio" id="contact_status2" name="contact_status" value="0" class="md-radiobtn" {!! $radio2 !!}>
                    <label for="contact_status2">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> {!! trans($lang.'status_inactive_lbl') !!} </label>
                </div>
            </div>
        </div>
        
    </div>
</div> -->




<div class="clearfix"></div>
<div class="row margin-bottom-5">
    <div class="col-md-5"><label class="control-label"></label></div>
    <div class="col-md-4">
        <button type="submit" class="btn green-jungle btn-outline btn-circle" tabindex="{!! $index++ !!}" id="submit_btn">
            <i class="fa fa-save"></i> {!! trans($lang.'submit_btn_lbl') !!} 
        </button>
        <a href="{!! URL::route('admin.general.pages.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> {!! trans($lang.'cancel_btn_lbl') !!} 
        </a>
    </div>
</div>