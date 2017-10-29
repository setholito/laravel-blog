<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('blog.index')}}">Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.index')}}">Admin</a>
                </li>
                <li>
                    <a href="{{ route('about.index')}}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
