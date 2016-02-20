@extends('layouts.layout')

@section('title')
    Home
@stop

@section('page-title')
	MEMBERS ({{ count($memberItems) }})
@stop

@section('content')
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    &nbsp;
</div>
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    <div class="form-container">
        @foreach ($memberItems as $memberItem)
        	@include('templates.widgets.player', array('player' => $memberItem))
        @endforeach
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    &nbsp;
</div>
@stop