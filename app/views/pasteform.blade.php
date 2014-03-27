@extends('layouts.master')
<div class="pasteform-wrapper col-lg-9">
{{ Form::open(array('id' => 'pasteform', 'action' => 'PasteController@create')) }}
    {{ Form::textarea('paste') }}
    {{ Form::select('expire', array('10' => '10 Minutes', '60' => '1 Hour', '1440' => '1 Day', '0' => 'Never Expire'))}}
    {{ Form::submit('Paste', null, array('class' => 'btn btn-success'))}}
{{ Form::close() }}
</div>
