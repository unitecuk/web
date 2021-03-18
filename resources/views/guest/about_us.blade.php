@extends('layouts.app')

@section('content')
<div id="main">

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>About us</a></h2>

            </div>
        </header>

        <p>
            UNITEC is a start-up focused on solving a real-life problem that exists for both the admission teams and the prospective students during Clearing. UNITEC chatbot is a smart virtual assistant designed specifically for the university Clearing needs.
            <br>
            <br>
            Before the Covid-19 lockdown, Clearing used to be a resource intensive process. It involved short-term hires of call centre ambassadors, handling of high application traffic and post call-centre activities. Now, it is a lot more chaotic and complex due to the pandemic related uncertainties. We are here to automate the Clearing process and help the admissions staff achieve their Clearing goals.
            <br>
            <br>
            UNITEC chatbot facilitates human-like conversations with your prospective students. This can help you provide a better customer service and boost your competitive edge. At one-go, you can answer all questions of your prospective students and save them from hours of website browsing.
            <br>
            <br>
            Our user-friendly chatbot can be easily integrated to your existing systems. It is designed to protect your commercially sensitive data. It can be customised to meet your department-specific needs. Don’t worry, we do all the coding!
        </p>
        <img src="images/info.jpg" style="width:60%; margin-left:20%">

    </article>



</div>
@endsection

@section('nav')
    @include('navbars.guest')
@endsection

@section('sidebar')
    @include('guest.side_column')
@endsection
