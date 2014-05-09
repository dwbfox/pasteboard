@extends('layouts.master')

@section('content')
@if (isset($tagged_pastes))
    <div class="alert alert-info">
      Showing tagged pastes for <span class="label label-warning">{{{ $tagged_pastes->first()->tag }}}</span>
    </div>
    @foreach ($tagged_pastes as $paste)
        {{ Debugbar::info($paste)}}

      <div class="panel panel-default">
          <div class="panel-heading">
                <div><a href="{{{ route('paste.show', $paste->token) }}}"> {{{ $paste->title }}}</a></div>
                <span class="created-date">
                    <i class="fa fa-calendar"></i> <span class="">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>
                </span>
                <span class="privacy">
                    Visibility: <i title="{{ ($paste->private == 1) ? 'Private' : 'Public' }}" class="fa {{ ($paste->private == 1) ? 'fa-eye-slash' : 'fa-eye' }}"></i>
                </span>
           </div>
        
        </div>
        </div>
        {{{ $paste->title}}}
    @endforeach
@else
    <div class="alert alert-danger">
      <a href="#" class="alert-link">No tagged_pastes were found this tag.</a>
    </div>
@endif
@endsection
