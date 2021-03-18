@extends('layouts.app')

@section('content')

<div id="main">

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>Support us</a></h2>

            </div>
        </header>

        <p>
            <br>
            We have deduced from our survey that young students prefer Clearing be done over text messaging to phone calls. We have used the survey to better understand the student needs. If you are a prospective applicant or an admission staff, please take a few minutes to help us better understand your needs. Take the following surveys!
            <br>
            <br>


            <a href="https://www.surveymonkey.co.uk/r/5V6BYMF" class="button large fit" target="_blank">

                Survey 1
            </a>
            <br>
            <br>
            <a href="https://www.surveymonkey.co.uk/r/65S3WX2" class="button large fit" target="_blank">

                Survey 2
            </a>
            <br>
            <br>
            Alternatively, you can contact us to discuss your individualized organizational needs.

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
