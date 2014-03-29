@if (isset($paste->paste))
    <div class="metadata">

        <div class="created-date">
            Created on: <span class="cell">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>
        </div>
        
        <div class="permalink">
        <i class="fa fa-chain"></i><input type="text" value="{{ route('show', $paste->token) }}">
        </div>


        @if (isset($paste->tags) and is_array($paste->tags))
            <div class="tags">

                <i class="fa fa-tags"></i>
                @foreach ($paste->tags as $tag)
                <a href="#"><span class="label label-warning">{{ $tag }}</span></a>
                @endforeach
            </div>
        @endif
    </div>

@endif