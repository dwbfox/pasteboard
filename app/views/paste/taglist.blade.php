@extends('layouts.master')

@section('content')
@if (isset($pastes) and is_array($pastes))
    <div class="alert alert-info">
      <a href="#" class="alert-link">Showing pastes</a>
    </div>
    @foreach ($pastes as $paste)
    {{ var_dump($paste) }}

        {{{ $paste->title}}}
    @endforeach
@else
    <div class="alert alert-danger">
      <a href="#" class="alert-link">No pastes were found this tag.</a>
    </div>
@endif
@endsection
