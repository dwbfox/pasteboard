@extends('layouts.master')
@section('content')
    <div class="pasteform-wrapper">
    <div class="panel panel-default">
    <div class="panel-heading"><h1><i class="fa fa-plus-circle"></i> Create a new paste</h1></div>
    <div class="panel-body">

    {{ Form::open(array('id' => 'pasteform', 'action' => 'PasteController@store')) }}

        <div class="">
        @if ($errors->has('title'))
             <div class="input-error">{{ $errors->first('title') }}</div>
        @endif
            {{ Form::label('title', 'Paste Title') }} <small>Max. 50 characters.</small>
            {{ Form::text('title', null, array('class' => 'form-control' )) }}
        </div>

        <div class="">
            @if ($errors->has('tags'))
             <div class="input-error">{{ $errors->first('tags') }}</div>
            @endif
            {{ Form::label('tags', 'Tags') }} <small>Max. 5. Separated by either space or commas</small>
            {{ Form::text('tags', null, array('class' => 'form-control' )) }}
        </div class="">
        

        <div class="">
            @if ($errors->has('private'))
             <div class="input-error">{{ $errors->first('private') }}</div>
            @endif
            {{ Form::label('private', 'Public') }}
            {{ Form::radio('private', 0, 'true') }}
            {{ Form::label('private', 'Private') }}
            {{ Form::radio('private', 1) }} <small>Private pastes will be unlisted and only individuals with the link to the pastes can view it.</small>
        </div>

        <div class="control-group">
            @if ($errors->has('expire'))
             <div class="input-error">{{ $errors->first('expire') }}</div>
            @endif
            {{ Form::label('expire', 'Expires in') }} 
            {{ Form::select('expire', array('10' => '10 Minutes', '60' => '1 Hour', '1440' => '1 Day', '0' => 'Never Expire'), null, array('class' => 'form-control')) }}
        </div>

        <div class="">
            {{ Form::textarea('paste', null, array('placeholder' => 'Your paste here...', 'required' => 'required', 'class' => 'form-control')) }}
        </div>

        <div>
            {{ Form::submit('Paste', array('class' => 'btn'))}}
        </div>
        {{ Form::close() }}
    </div>
    </div>
    </div>
    </div>
@endsection
