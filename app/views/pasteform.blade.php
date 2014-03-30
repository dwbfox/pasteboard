@extends('layouts.master')
@section('content')
    <div class="pasteform-wrapper">
    {{ Form::open(array('id' => 'pasteform', 'action' => 'new')) }}
        {{ Form::label('expire', 'Expires in') }} 
        {{ Form::select('expire', array('10' => '10 Minutes', '60' => '1 Hour', '1440' => '1 Day', '0' => 'Never Expire')) }}
        {{ Form::submit('Paste', null, array('class' => 'btn btn-success'))}}
        {{ Form::textarea('paste') }}
    {{ Form::close() }}
    </div>
@endsection