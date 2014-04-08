<div id="sidebar">
    <div class="box-cell">
        @include('about')
    </div>

    
    @if (isset($paste->private) && $paste->private !== 1)
     <div class="box-cell">
        <h4>Sharing is caring</h4>
        <div class="share-this">
            <span class='st_sharethis_large' displayText='ShareThis'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>
        </div>
    </div>
    @endif

    <div class="box-cell meta">
        @include('paste.meta')
        <div class="fork-btn">
            <div><button class="btn btn-success"><i class="fa fa-plus-circle"></i> Create a new paste</button></div>
            @if (isset($paste->paste))
            <div><button class="btn btn-success"><i class="fa fa-code-fork"></i> Fork this paste</button></div>
            @endif
        </div>
    </div>

    <div class="box-cell">
        @include('paste.latest')
    </div>


</div>
