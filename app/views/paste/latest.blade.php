<div class="latest-pastes">
    <h3>Latest pastes</h3>
    @if (isset($latest))
        @foreach ($latest as $key => $paste)
            <div class="latest-paste">
            @foreach ($paste->tags as $tag)
              <label class="label label-warning">{{ $tag->tag}}</label> 
            @endforeach
            <a href="{{ route('show', $paste->token) }}">{{ Str::limit($paste->title, 12) }} </a>
            Created  <span class="">{{{ \Carbon\Carbon::createFromTimeStamp(strtotime($paste->created_at))->diffForHumans() }}}</span>

            </div>
        @endforeach
    @endif
</div>
