@extends('layouts.master')


@section('content')
@if (isset($paste->paste))
<div class="col-lg-7">
    <div id="paste">

        <div class="source">
            <pre class="brush: php">
            {{{ $paste->paste }}}
            </pre>
            </div>
        </div>
    </div>
</div>
@endif
