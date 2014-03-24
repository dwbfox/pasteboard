<div id="sidebar" class="box-cell">
    <div class="">
        <h1>GAUNT</h1>
        @if (isset($paste->paste))
        <div class="metadata">
            <div class="created-date">
                Created on: <span class="cell">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>

            </div>
            <div class="tags">

                Tags: 
                @foreach ($paste->tags as $tag)
                <a href="#"><span class="label label-warning">{{ $tag }}</span></a>
                @endforeach
            </div>
        </div>
        @endif
        <div class="fork-btn">
            <button class="btn btn-success">Create a new paste</button>
            @if (isset($paste->paste)) <button class="btn btn-info">Fork this paste</button> @endif
        </div>
    </div>
</div>
