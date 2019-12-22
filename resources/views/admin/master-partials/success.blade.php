@if (count(Session::get('error')) > 0)
<div class="alert alert-danger" id="flasherror" style="display: none;">
    <strong>Whoops!</strong> {!! Session::get('error') !!}<br><br>
</div>
@endif

@if (count(Session::get('success')) > 0)
<div class="alert alert-success" id="flashsuccess" style="display: none;">
    <strong>Success!</strong> {!! Session::get('success') !!}<br><br>
</div>
@endif