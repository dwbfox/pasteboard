<div class="navbar navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('paste.new') }}">{{ Config::get('app.site_name')  }}</a>
        </div>
        <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="{{ route('paste.new') }}"><i class="fa fa-plus-circle"></i> Create a new paste</a></li>
                  <li><a href="#"><i class="fa fa-tags"></i> Trending tags (Coming soon)</a></li>
                  <li><a disabled="disabled" href="#"><i class="fa fa-user"></i> Create an account (Coming soon)</a></li>
              </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>
