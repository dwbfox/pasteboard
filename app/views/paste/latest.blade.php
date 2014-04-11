<div class="latest-pastes">
    <h3>Latest pastes</h3>
    @if (isset($latest) && sizeof($latest) > 0)
        @foreach ($latest as $key => $paste)
            <div class="latest-paste">
            <a href="{{ route('show', $paste->token) }}">{{ Str::limit($paste->title, 12) }} </a>
              <span class="">{{{ \Carbon\Carbon::createFromTimeStamp(strtotime($paste->created_at))->diffForHumans() }}}</span>
            </div>
        @endforeach
    @else
        <p>No pastes have been posted</p>
    @endif
</div>
