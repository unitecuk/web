@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'dashboard', 'title' => __('Material Dashboard')])

@section('content')

<div id="main">


    <section id='image'>
        <div id="img">
            <img class="w-100" src="images/Banner1.jpg">
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
            For admission offices in universities, who are looking to automate their annual Clearing during the
            Covid-19 lockdown, UNITEC’s task-oriented, emotionally intelligent chatbot provides a cheaper,
            technology-friendly, dynamic communication platform.
            <br>
            <br>
            With the UNITEC chatbot, universities can automate their Clearing process and efficiently manage their
            admission resources. The bot can better attract tech-savvy, text-preferring applicants by providing a
            prompt and extended customer service.
        </p>

    </article>

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
            UNITEC was founded at the University of Brighton in 2019 after a first-hand experience of working in
            Clearing. We have worked in close collaborations with the University of Brighton to understand the
            problems faced by the admission department during Clearing. We have derived our project boundaries based
            on the department’s system requirements.
            <br>
            <br>
            This experience has helped us refine our mission and product objectives. We understand the importance of
            data security and protection. We are working currently to secure commercially sensitive information,
            handle Clearing traffic and provide reliable backups in high traffic events. We have re-defined our
            priorities to build an easy-to-deploy system that would require minimum intervention from the university
            IT team.
            <br>
            <br>
            Additionally, we have incorporated the feedback received from the University of Brighton students. Our
            findings have led us to work on a fault tolerant, emotionally intelligent bot. Market-leading
            conversational Artificial Intelligence tools are used to design a student-focused bot.
        </p>
        <hr>


        <h2><a>Entrepreneurship Accelerator Programs</a></h2>


        <a class="image featured"><img src="images/Banner3.jpg" alt="" /></a>

        <p>
            UNITEC secured early-stage funding from the Santander Universities Ideas Competition on December 2019.
            Winning the competition helped secure early stage seed investments from angel investors.
            <br>
            <br>
            The Santander Universities have extended their support by shortlisting UNITEC for its annual Emerging
            Entrepreneurs program. We are thrilled to receive this accelerator-approach mentorship opportunity.
            Follow us on our LinkedIn and Instagram to learn more about our journey with the 2020 Santander Emerging
            Entrepreneurs program.
        </p>


        <hr>


        <h2><a> UNITEC Covid-19 response</a></h2>


        <p>
            UNITEC is committed to delivering a minimum viable customised product within a short time frame to the
            UK universities’ admission departments as response to the Covid-19 lockdown. Contact us for further
            details.
        </p>

    </article>
    <article class="post">
        <header>
            <div class="title" style=" text-align:center">
                <h2><a>Meet the Team</a></h2>

            </div>
        </header>

        <div class="box alt" style="text-align:center">
            <hr />
            <h2><a>Board Advisors</a></h2>
            <hr />
            <div class="row gtr-uniform" style="justify-content:center">
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit" style="width:70%; margin-left:15%;">
                            <img src="images/Board1.jpg">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">James Burton</h5>
                    <p class="text-uppercase blue-text"><strong>Advisor</strong></p>
                    <a href='https://www.linkedin.com/in/jamesburton/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>
                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit" style="width:70%; margin-left:15%;">
                            <img src="images/Board2.jpg">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Dr. Darren Boyd-Annells</h5>
                    <p class="text-uppercase blue-text"><strong>Advisor</strong></p>
                    <a href='https://www.linkedin.com/in/darrenboydannells/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>
                </div>

            </div>

        </div>

        <div class="box alt" style="text-align:center">
            <hr />
            <h2><a>Management</a></h2>
            <hr />
            <div class="row gtr-uniform" style="justify-content:center">
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/team1.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Shuvechchha Ghimire </h5>
                    <p class="text-uppercase blue-text"><strong>CEO</strong></p>
                    <a href='https://www.linkedin.com/in/subughimire/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>

            </div>

        </div>

        <div class="box alt" style="text-align:center">
            <hr />
            <h2><a>Development and Marketing</a></h2>
            <hr />
            <div class="row gtr-uniform" style="justify-content:center">

                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/david.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">David Gkikas </h5>
                    <p class="text-uppercase blue-text"><strong>Software Engineer</strong></p>
                    <a href='' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>

                </div>

                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/team4.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3"> Syeed Anwar Ansari </h5>
                    <p class="text-uppercase blue-text"><strong>Software Engineer</strong></p>
                    <a href='https://www.linkedin.com/in/subughimire/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/Aadhikya_Ghimire_Software_Develooper_at_Unitec.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Aadhikya Ghimire </h5>
                    <p class="text-uppercase blue-text"><strong>Software Engineer</strong></p>
                    <a href='https://www.linkedin.com/in/aadhikya-ghimire-05068b1aa/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/team.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Emmanuel Sakyi </h5>
                    <p class="text-uppercase blue-text"><strong>HR and Marketing</strong></p>
                    <a href='' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>

            </div>

        </div>

        <div class="box alt" style="text-align:center">
            <hr />
            <h2><a>Interns</a></h2>
            <hr />
            <div class="row gtr-uniform" style="justify-content:center">

                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/Stefano_intern.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h6 class="font-weight-bold mt-4 mb-3">Stefano Scanzani</h6>
                    <p class="text-uppercase blue-text"><strong>Business and Finance Intern </strong></p>
                    <a href='https://www.linkedin.com/in/stefanoscanzani/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/team.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Prajwal Pokhrel </h5>
                    <p class="text-uppercase blue-text"><strong>Legal Finance Intern</strong></p>
                    <a href='' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/siddhant.jpeg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Shiddhant Phuyal</h5>
                    <p class="text-uppercase blue-text"><strong>Web Development Intern</strong></p>
                    <a href='' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>
                <div class="col-4">

                    <div class="avatar mx-auto">
                        <span class="image fit">
                            <img src="images/mustafa_intern.jpg" style="width:70%; margin-left:15%;">
                        </span>
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Syed Mustafa</h5>
                    <p class="text-uppercase blue-text"><strong>Backend Developement Intern</strong></p>
                    <a href='https://www.linkedin.com/in/syedmustafa128/' target="_blank" class="p-2 fa-lg fb-ic">
                        <i class="fab fa-linkedin-in blue-text"> </i>
                    </a>


                </div>

            </div>

        </div>
    </article>

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a>Support us</a></h2>

            </div>
        </header>

        <p>
            <br>
            We have deduced from our survey that young students prefer Clearing be done over text messaging to phone
            calls. We have used the survey to better understand the student needs. If you are a prospective
            applicant or an admission staff, please take a few minutes to help us better understand your needs. Take
            the following surveys!
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
