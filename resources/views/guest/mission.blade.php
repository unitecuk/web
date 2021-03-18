@extends('layouts.app')

@section('content')

<div id="main">
    <section id='image'>
        <div id="img">
            <img class="d-block w-100" src="images/Banner1.jpg">
        </div>

    </section>
    <br>
    <br>
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>Our Mission</a></h2>

            </div>
        </header>

        <p>
            For admission offices in universities, who are looking to automate their annual Clearing during the Covid-19 lockdown, UNITEC’s task-oriented, emotionally intelligent chatbot provides a cheaper, technology-friendly, dynamic communication platform.
            <br>
            <br>
            With the UNITEC chatbot, universities can automate their Clearing process and efficiently manage their admission resources. The bot can better attract tech-savvy, text-preferring applicants by providing a prompt and extended customer service.
        </p>

    </article>


</div>

@endsection


@section('nav')
    @include('navbars.guest')
@endsection

@section('sidebar')
    @include('guest.side_column')
@endsection


