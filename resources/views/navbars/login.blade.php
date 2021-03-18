<nav class="links">

</nav>


<header id="header">
    <img src="images/logo2.jpg" style="height:80%; margin-left:1em; margin-top:1%; ">
    <h1><a href="/ ">Unitec</a></h1>
    <nav class="links" style="padding-left:65%">


        <ul>
            @guest
            <li><a class="font-weight-bold" href="{{ route('login') }}">Log In</a></li>
            @if (Route::has('register'))
            <li><a class="font-weight-bold" href="{{ route('register') }}">Register</a></li>
            @endif
            @else

            <li><a class="font-weight-bold" href="">{{ Auth::user()->name }}</a></li>
            <li><a class="font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest

        </ul>



    </nav>

    <nav class="main">
        <ul>
            <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>


</header>

<!-- Menu -->
<section id="menu">

    <!-- Search -->
    <section>
        <form class="search" method="get" action="#">
            <input type="text" name="query" placeholder="Search" />
        </form>

        <!-- Actions -->
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <ul class="actions stacked">
                <li><a href="{{ route('dashboard') }}" class="button large fit">Dashboard</a></li>
            </ul>




            @else
            <ul class="actions stacked">
                <li><a href="{{ route('login') }}" class="button large fit">Log In</a></li>
            </ul>

            @if (Route::has('register'))
            <ul class="actions stacked">
                <li><a href="{{ route('register') }}" class="button large fit">Register</a></li>
            </ul>
            @endif
            @endauth
        </div>
        @endif





        <!-- Links -->

        <nav class="links" style="text-align: center;">
            <li><a href="/mission">MISSION</a></li>
            <li><a href="/about_us">ABOUT US</a></li>
            <li><a href="/projects">PROJECTS</a></li>
            <li><a href="/team">MEET THE TEAM</a></li>
            <li><a href="/support">SUPPORT US</a></li>
            <li><a href="/blogs">BLOGS</a></li>
        </nav>

    </section>



</section>
