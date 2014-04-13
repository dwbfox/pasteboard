@extends('layouts.master')


@section('content')
@if (isset($paste->paste))

<div class="paste-wrapper">
    <div class="panel panel-default">
      <div class="panel-heading">
            <h1>{{{ $paste->title }}}</h1>
            <div class="paste-info-block pull-right">
                <span class="created-date">
                    <i class="fa fa-calendar"></i> <span class="">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>
                </span>
                <span class="privacy">
                    Visibility: <i title="{{ ($paste->private == 1) ? 'Private' : 'Public' }}" class="fa {{ ($paste->private == 1) ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                </span>
            </div>
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
