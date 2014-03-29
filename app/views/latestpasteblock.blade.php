<div class="latest-pastes">
    <h3>Latest pastes</h3>
    @if (isset($latest))
        @foreach ($latest as $key => $paste)
            <div class="latest-paste">
            <label class="label label-warning">{{ $paste->tag}}</label> 
            <a href="{{ route('show', $paste->token) }}">{{ Str::limit($paste->token, 3) }} </a>
            Created on: <span class="">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>

            </div>
        @endforeach
    @endif
</div>