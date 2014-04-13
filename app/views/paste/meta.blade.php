@if (isset($paste->paste))
    <div class="metadata">

        <div class="permalink">
        <i class="fa fa-chain"></i><input class="form-control" type="text" value="{{ route('show', $paste->token) }}">
        </div>

        {{ Debugbar::warning($paste->tags) }}
        <div class="tags">
        <i class="fa fa-tags"></i>
        @if (isset($paste->tags) and sizeof($paste->tags) > 0)
                @foreach ($paste->tags as $tag)
                <a href="{{ route('byTag', $tag->id) }}"><span class="label label-warning">{{{ $tag->tag }}}</span></a>
                @endforeach
        @else
            <span class="label label-info">none</span>
        @endif
        </div>


    </div>

@endif
