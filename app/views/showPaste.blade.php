@extends('layouts.master')


@section('content')
<div id="paste">

    <div class="source">
        <pre class="brush: php">
        {{{ $paste->paste }}}
        </pre>
    </div>
</div>
@endsection