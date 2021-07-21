@extends('layout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">About Us</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                About
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="padding ptb-xs-40">
        <div class="container">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2">
                    <div class="text-center ">
                        <h2 >A Few Words About us</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-sm-30 mt-xs-30">
                    <div class="solution_box about_new">
                        <h4 >Why Choose Us</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-sm-30 mt-xs-30">
                    <div class="solution_box about_new">
                        <h4 >Our Mission</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-sm-30 mt-xs-30">
                    <div class="solution_box about_new">
                        <h4 class="txth4">What We Do</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div>
                        <h3 class="bigger_text mt-60 mt-xs-0 mt-sm-2 ">The Company you can trust</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 mt-sm-30 mt-xs-30">
                    <img class ="imgAbout"src="{{asset('/img/dashboard-example-desktop.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="team_about" class="padding ptb-xs-40">
        <div class="container">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2">
                    <div class="sec_hedding text-center">
                        <h2>Our Team</h2>
                        <span class="b-border"></span>
                        <p class="mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($team as $teams)
                    <div class="col-lg-3 padd iconsB">
                        <div class="card mb-3">
                            <img src="{{asset('img/'.$teams->path)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$teams->name}}</h5>
                                <p class="card-text bold">{{$teams->position}}</p>
                                <p class="card-text">Phone: (+373) {{$teams->phone}}</p>
                                <p class="card-text">Email: <br>{{$teams->email}}</p>
                                <ul>
                                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
