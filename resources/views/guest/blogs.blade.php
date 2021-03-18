@extends('layouts.app')

@section('content')
<div id="main">

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>Blogs</a></h2>

            </div>
        </header>

        <p>
            Coming Soon!
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
