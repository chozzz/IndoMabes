@extends('layouts.layout')

@section('title')
    Search
@stop

@section('page-title')
SEARCH
@stop

@section('content')
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    &nbsp;
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="form-container">
        {!! Form::open(['route' => 'postSearch']) !!}
        <div class="input-group">
            {!! Form::text('clanName', '', array(
                'class' => 'form-control', 
                'placeholder' => 'Insert clan name here',
                'autocomplete' => 'off'
                )) 
            !!}
            <div class="input-group-btn">
                {!! Form::submit('Go !', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="form-container">
        @foreach ($clanItems as $clanItem)
            @include('templates.widgets.clan', array('clan' => $clanItem))
        @endforeach
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    &nbsp;
</div>
@stop