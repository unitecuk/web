<header id="header">
    <img src="images/logo2.jpg" style="height:80%; margin-left:1em; margin-top:1%; ">
    <h1  ><a href="/ ">Unitec</a></h1>
    <nav class="links">
        <ul >
            <li><a class="font-weight-bold" href="/mission">Mission</a></li>
            <li><a class="font-weight-bold" href="/about_us">About Us</a></li>
            <li><a class="font-weight-bold" href="/projects">Projects</a></li>
            <li><a class="font-weight-bold" href="/team">Meet the team</a></li>
            <li><a class="font-weight-bold" href="/support">Support Us</a></li>
            <li><a class="font-weight-bold" href="/blogs">Blogs</a></li>
            <li><a class="font-weight-bold" style="color: orangered" href="/chatbot_mvp">Chatbot MVP</a></li>
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

        <!-- Actions  -->
{{--        {{ route('home') }}  {{ route('login') }}--}}

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <ul class="actions stacked">
                        <li><a href="{{ route('dashboard') }}" class="button large fit">Dashboard</a></li>
                    </ul>
                @else
                    <ul class="actions stacked">
                        <li><a href="http://www.dashboard.unitec.org.uk/login" target="_blank" class="button large fit">Log In</a></li>
                    </ul>

                    @if (Route::has('register'))
                        <ul class="actions stacked">
                            <li><a href="http://www.dashboard.unitec.org.uk/register" target="_blank" class="button large fit">Register</a></li>
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
            <li><a href="/chatbot_mvp">Chatbot MVP</a></li>
        </nav>

    </section>



</section>
