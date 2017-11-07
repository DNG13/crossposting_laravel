<!--default bootstrap navbar-->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">N.Cross-posting</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class={{ Request::is('home')? "active" : ''}}><a href="/home">Головна</a></li>
                <li class={{ Request::is('about')? "active" : ''}}><a href="/about">Про нас</a></li>
                <!-- Authentication Links -->
                @if (Auth::user())
                    <li class={{ Request::is('services')? "active" : ''}}><a href="/services">Соцмережі</a></li>
                    <li class={{ Request::is('posts/create')? "active" : ''}}><a href="/posts/create">Новий пост</a></li>
                    <li class={{ Request::is('posts')? "active" : ''}}><a href="/posts/">Відправлені пости</a></li>
                    <li class={{ Request::is('contact')? "active" : ''}}><a href="/contact">Контакти</a></li>
                @endif
                <li class={{ Request::is('help')? "active" : ''}}><a href="/help">Допомога</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class={{ Request::is('login')? "active" : ''}}><a href="{{ route('login') }}">Login</a></li>
                    <li class={{ Request::is('register')? "active" : ''}}><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown active">
                        <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a >

                        <ul class="dropdown-menu" role="menu">
                            </li>
                            <li><a href="#">#</a></li>
                            <li><a href="#">#</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>