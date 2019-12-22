@if($record->full_name != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Name:</label></div>
            <div class="col-md-6">
                <div style="margin-top: 10px;">{!! $record->full_name !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
@if($record->email != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Email:</label></div>
            <div class="col-md-6">
                <div style="margin-top: 10px;">{!! $record->email !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
@if($record->contact_number != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Contact Number:</label></div>
            <div class="col-md-6">
                <div style="margin-top: 10px;">{!! $record->contact_number !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
@if($record->module != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Module:</label></div>
            <div class="col-md-7">
                @if($record->module == 0)
                    <div style="margin-top: 10px;">Academic</div>
                @else
                    <div style="margin-top: 10px;">General Training</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@if($record->test_date != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Test Date:</label></div>
            <div class="col-md-6">
                @if($record->test_date == 0)
                    <div style="margin-top: 10px;">23rd September 2018 (Sunday)</div>
                @else
                    <div style="margin-top: 10px;">7th October 2018 (Sunday)</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@if($record->exposure != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Exposure:</label></div>
            <div class="col-md-6">
                @if($record->exposure == 0)
                    <div style="margin-top: 10px;"> Fresher (in case you have never appeared for IELTS)</div>
                @else
                    <div style="margin-top: 10px;">Repeater (in case you have appeared for IELTS atleast once.)</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@if($record->exam_date != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Exam Date:</label></div>
            <div class="col-md-6">
                <?php $exam_date = date('dS  M, Y',strtotime($record->exam_date)); ?>
                <div style="margin-top: 10px;">{!! $exam_date !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
@if($record->reason_choosing_ielts_ans != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Reason for choosing Trial IELTS:</label></div>
            <div class="col-md-6">
                <div style="margin-top: 10px;">{!! $record->reason_choosing_ielts_ans !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
@if($record->payment_detail_contact != '')
<div class="clearfix"></div>
<div class="col-md-6">
    <div class="row margin-bottom-5">
        <div class="form-group">
            <div class="col-md-6"><label class="control-label">Payment Detail Contact:</label></div>
            <div class="col-md-6">
                <?php $payment_detail_contact = str_replace('###', ' | ', $record->payment_detail_contact); ?>
                <div style="margin-top: 10px;">{!! $payment_detail_contact !!}</div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="clearfix"></div>
<br>

<div class="row margin-bottom-5">
    <div class="col-md-1"><label class="control-label"></label></div>
    <div class="col-md-4">
        <a href="{!! URL::route('admin.trialieltsforms.index') !!}" class="btn dark btn-outline btn-circle" tabindex="{!! $index++ !!}">
            <i class="fa fa-times"></i> Cancel
        </a>
    </div>
</div>