<nav class="navbar navbar-toggleable-md navbar-light bg-faded static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('root_path')}}"> {{config('app.name')}}</a>
        </div>

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{set_active_route('root_path')}}" href="{{route('root_path')}}">Home</a>
                </li>
                <li>
                    <a class="nav-link {{set_active_route('about_path')}}" href="{{route('about_path')}}">About</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Artisan</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                        <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                        <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                        <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
                        <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                        <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-toggler-right">
                <li>
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>