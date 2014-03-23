<div id="sidebar" lass="sidebar col-md-3">
    <div class="">
        <h1>GAUNT</h1>
        @if (isset($paste))
        <div class="metadata">
            <div class="created-date">
                Created on: <span class="cell">{{{ date('F j, Y', strtotime($paste->created_at)) }}}</span>

            </div>
        <div class="cell-content language">
                Language: <label class="cell label label-info">PHP</label>
            </div>
        </div>
        @endif
        <div class="fork-btn">
            <button class="btn btn-success">Create a new paste</button>
            @if (isset($paste)) <button class="btn btn-info">Fork this paste</button> @endif
        </div>
    </div>
</div>
