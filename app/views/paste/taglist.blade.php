@extends('layouts.master')

@section('content')
@if (isset($tagged_pastes))
    <div class="alert alert-info">
      Showing tagged pastes for <span class="label label-warning">{{{ $tagged_pastes->first()->tag }}}</span>
    </div>
    <div class="item-list">
    @foreach ($tagged_pastes as $paste)

      <li class="tag-list-container">
          <div class="panel-heading ">
                <div><a href="{{ route('paste.show', $paste->pastes->token) }}"> {{{ $paste->pastes->title }}}</a></div>
                <span class="created-date">
                    <i class="fa fa-calendar"></i> <span class="">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>
                </span>
           </div>
        </li>
        {{{ $paste->title}}}
    @endforeach
    </div>
@else
    <div class="alert alert-danger">
      <a href="#" class="alert-link">No tagged_pastes were found this tag.</a>
    </div>
@endif
@endsection
