@extends('layouts.app')

@section('content')

<div id="main">

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>Projects</a></h2>

            </div>
        </header>
        <br>

        <h2><a>University of Brighton</a></h2>


        <p>
            UNITEC was founded at the University of Brighton in 2019 after a first-hand experience of working in Clearing. We have worked in close collaborations with the University of Brighton to understand the problems faced by the admission department during Clearing. We have derived our project boundaries based on the department’s system requirements.
            <br>
            <br>
            This experience has helped us refine our mission and product objectives. We understand the importance of data security and protection. We are working currently to secure commercially sensitive information, handle Clearing traffic and provide reliable backups in high traffic events. We have re-defined our priorities to build an easy-to-deploy system that would require minimum intervention from the university IT team.
            <br>
            <br>
            Additionally, we have incorporated the feedback received from the University of Brighton students. Our findings have led us to work on a fault tolerant, emotionally intelligent bot. Market-leading conversational Artificial Intelligence tools are used to design a student-focused bot.
        </p>
        <hr>


        <h2><a>Entrepreneurship Accelerator Programs</a></h2>


        <a class="image featured"><img src="images/Banner3.jpg" alt="" /></a>

        <p>
            UNITEC secured early-stage funding from the Santander Universities Ideas Competition on December 2019. Winning the competition helped secure early stage seed investments from angel investors.
            <br>
            <br>
            The Santander Universities have extended their support by shortlisting UNITEC for its annual Emerging Entrepreneurs program. We are thrilled to receive this accelerator-approach mentorship opportunity. Follow us on our LinkedIn and Instagram to learn more about our journey with the 2020 Santander Emerging Entrepreneurs program.
        </p>


        <hr>


        <h2><a> UNITEC Covid-19 response</a></h2>


        <p>
            UNITEC is committed to delivering a minimum viable customised product within a short time frame to the UK universities’ admission departments as response to the Covid-19 lockdown. Contact us for further details.
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
