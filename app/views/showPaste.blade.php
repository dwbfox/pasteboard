@extends('layouts.master')


@section('content')
@if (isset($paste->paste))
<div class="paste-wrapper">
    <div id="paste">

        <div class="source">
            <pre class="">
            {{{ $paste->paste }}}
            </pre>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
