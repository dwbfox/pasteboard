@extends('layouts.master')


@section('content')
@if (isset($paste->paste))

<div class="paste-wrapper">
    <div class="panel panel-default">
      <div class="panel-heading">
            <h1>{{{ $paste->title }}}</h1>
            <span class="created-date">
                <i class="fa fa-calendar"></i> <span class="">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>
            </span>
            {{ Debugbar::info($paste->private)}}
            <span class="privacy">
                Visibility: <i title="{{ ($paste->private == 1) ? 'Private' : 'Public' }}" class="fa {{ ($paste->private == 1) ? 'fa-eye-slash' : 'fa-eye' }}"></i>
            </span>
       </div>
      <div class="panel-body">
        <div id="paste">
            <div class="source">
                <pre class="">
                {{{ $paste->paste }}}
                </pre>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endif
@endsection
