
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Fisrt Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name' , 'id' => 'first_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Last Name: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name' , 'id' => 'last_name', 'maxlength' => '90', 'tabindex' => $index++)) !!}
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Course: <span class="required">*</span></label></div>
            <div class="col-md-7">
                {!! Form::text('course', null, array('class' => 'form-control', 'placeholder' => 'Course' , 'id' => 'course', 'maxlength' => '90', 'tabindex' => $index++)) !!}
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
            <div class="col-md-4"><label class="control-label">Cover Image: </label></div>
            <div class="col-md-7">
                
                <div class="fileinput @if($record->cover_id!='')  {!! 'fileinput-exists' !!} @else {!! 'fileinput-new' !!} @endif" data-provides="fileinput" id="cover_media_div">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        @if($record->cover_id!='')
                            <img src="{!! asset( General::getResizeImage($record->cover->source, '150') ) !!}">
                        @endif
                    </div>
                    <input type="hidden" name="cover_media_id" id="cover_media_id" value="{!! $record->cover_id !!}">
                    <div>
                        <span class="btn blue-sharp btn-outline btn-circle btn-file">
                            <span class="fileinput-new"> <i class="fa fa-mouse-pointer"></i> Select </span>
                            <span class="fileinput-exists"> <i class="fa fa-pencil"></i> Uplode </span>
                            <input type="file" name="cover_image" id="cover_image" tabindex="{!! $index++ !!}">
                        </span>

                        <a href="javascript:;" class="btn red btn-outline btn-circle fileinput-exists mt-ladda-btn ladda-button" data-style="expand-right" onclick="removeimage('cover_media_id', 'cover_media_div', 'categories', 'cover_id', '{!! $record->id !!}', $(this))" tabindex="{!! $index++ !!}"> <span class="ladda-label"> <i class="fa fa-trash"></i> Delete </span> </a>
                    </div>
                </div>

            </div>      
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Summary:  </label></div>
            <div class="col-md-7">
                {!! Form::textarea('summary', null, array('class' => 'form-control', 'placeholder' => 'Summary', 'id' => 'summary', 'maxlength' => '512', 'tabindex' => $index++)) !!}
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
        <a href="{!! URL::route('admin.students.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>