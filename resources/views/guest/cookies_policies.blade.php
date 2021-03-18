@extends('layouts.app')

@section('content')

    <div id="main">

        <article class="post">
            <header>
                <div class="title">
                    <h2><a>Cookies Policy</a></h2>
                </div>
            </header>
            <embed src="docs/cookies.pdf#toolbar=0" width="100%" height="500">
        </article>

    </div>

@endsection


@section('nav')
    @include('navbars.guest')
@endsection

@section('sidebar')
    @include('guest.side_column')
@endsection
