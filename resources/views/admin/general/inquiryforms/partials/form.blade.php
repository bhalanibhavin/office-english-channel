
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Name:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->first_name !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Email:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->email !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Subject:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->subject !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-4"><label class="control-label">Comments:</label></div>
            <div class="col-md-7">
                <div style="margin-top: 10px;">{!! $record->comments !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<br>

<div class="row margin-bottom-5">
    <div class="col-md-1"><label class="control-label"></label></div>
    <div class="col-md-4">
        <a href="{!! URL::route('admin.inquiryforms.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>