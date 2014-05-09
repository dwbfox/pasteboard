<ul class="list-group latest-pastes">
    <h3>Latest pastes</h3>
    @if (isset($latest) && sizeof($latest) > 0)
        @foreach ($latest as $key => $paste)
            <li class="latest-paste">
            @foreach ($paste->tags as $tag)
            <span class="label label-warning latest-paste-tags">{{{ $tag->tag }}}</span>
            @endforeach
            <a href="{{ route('paste.show', $paste->token) }}">{{{ Str::limit($paste->title, 25) }}} </a>
              <span class="badge pull-right time-ago"><i class="fa fa-clock-o"></i> {{{ \Carbon\Carbon::createFromTimeStamp(strtotime($paste->created_at))->diffForHumans() }}}</span>
            </li>
        @endforeach
    @else
        <p>No pastes have been posted</p>
    @endif
</ul>
