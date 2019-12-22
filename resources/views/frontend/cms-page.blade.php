@extends('frontend.master')

@section('page-level-css')

@stop

@section('content')

<div id="content-block">
    <div class="container be-detail-container">
        <h2 class="content-title">{!! $page->title !!}</h2>
        <div class="blog-wrapper blog-grid">
            <div class="row">
                <div class="grid-item col-xs-12">
                    {!! $page->description !!}
                </div>
            </div>
        </div>
    </div>
</div>


@stop

@section('page-level-js')
    
@stop