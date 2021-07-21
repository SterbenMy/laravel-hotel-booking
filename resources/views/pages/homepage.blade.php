@extends('layout')

@section('content')
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner carslider">
                <div id="sliderID">
                    <div class="sliderID-container">
                        <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-item active"
                                 style="background-image: url({{asset('/img/imgSlider4.jpg')}});">
                                <div class="carousel-container">
                                    <div class="carousel-content container">
                                        <h2 class="animate__animated animate__fadeInDown">Welcome</h2>
                                        <h2 class="animate__animated animate__fadeInDown">Find the best hotels for your
                                            next trip</h2>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item" style="background-image: url({{asset('/img/imgSlider5.jpg')}});">
                                <div class="carousel-container">
                                    <div class="carousel-content container">
                                        <h2 class="animate__animated animate__fadeInDown">Welcome</h2>
                                        <h2 class="animate__animated animate__fadeInDown">Find the best hotels for your
                                            next trip</h2>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item" style="background-image: url({{asset('/img/imgSlider6.jpg')}});">
                                <div class="carousel-container">
                                    <div class="carousel-content container">
                                        <h2 class="animate__animated animate__fadeInDown">Welcome</h2>
                                        <h2 class="animate__animated animate__fadeInDown">Find the best hotels for your
                                            next trip</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section id="about" class="about padding ptb-xs-40">
        <div class="container">
            <div class="row pb-30">
                <div class="col-md-4 d-flex align-items-center">
                    <div class="section_tit">
                        <h2 class="txtB">About Us</h2>
                        <span class="b-line l-left sm-l-center"></span>
                    </div>
                </div>

                <div class="col-md-8 mt-xs-30 text-center text-md-left">
                    <p>
                        Founded in 1996 in Amsterdam, Cristin.com has grown from a small Dutch
                        startup to one of the world’s leading digital travel companies. Part of Booking Holdings Inc.
                        Cristin.com’s mission is to make it easier for everyone to experience the world. </p>
                    <p>
                        By investing in the technology that helps take the friction out of
                        travel, Cristin.com seamlessly connects millions of travellers with memorable experiences, a
                        range of transport options and incredible places to stay - from homes to hotels and much more.
                        As one of the world’s largest travel marketplaces for both established brands and entrepreneurs
                        of all sizes, Cristin.com enables properties all over the world to reach a global audience and
                        grow their businesses. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="padding ptb-xs-40 bg_contact light-color"
             style="background-image: url({{asset('/img/imgSlider6.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center call_headding">
                    <h3>Are you looking for a professional booking agency?</h3>
                    <div class="contact_info mt-30">
                        <span class="call-us"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                   width="48" height="48"
                                                   viewBox="0 0 172 172"
                                                   style=" fill:#000000;"><g fill="none" fill-rule="nonzero"
                                                                             stroke="none" stroke-width="1"
                                                                             stroke-linecap="butt"
                                                                             stroke-linejoin="miter"
                                                                             stroke-miterlimit="10" stroke-dasharray=""
                                                                             stroke-dashoffset="0" font-family="none"
                                                                             font-size="none"
                                                                             style="mix-blend-mode: normal"><path
                                        d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path
                                            d="M143.49817,110.99733c-4.515,-0.1075 -10.19817,-0.37267 -13.78867,-1.00333c-3.88433,-0.688 -8.557,-2.021 -11.8465,-3.04583c-2.58,-0.80267 -5.38933,-0.09317 -7.30283,1.81317l-15.8885,15.79533c-10.97933,-5.7835 -19.77283,-12.52017 -27.219,-20.00933c-7.48917,-7.44617 -14.22583,-16.23967 -20.00933,-27.219l15.79533,-15.89567c1.90633,-1.9135 2.61583,-4.72283 1.81317,-7.30283c-1.01767,-3.28233 -2.35783,-7.955 -3.03867,-11.83933c-0.63783,-3.5905 -0.89583,-9.27367 -1.0105,-13.78867c-0.09317,-3.90583 -3.27517,-7.00183 -7.181,-7.00183h-25.155c-3.139,0 -7.16667,2.35067 -7.16667,7.16667c0,32.5295 13.18667,63.597 35.58967,86.24367c22.64667,22.403 53.71417,35.58967 86.24367,35.58967c4.816,0 7.16667,-4.02767 7.16667,-7.16667v-25.155c0,-3.90583 -3.096,-7.08783 -7.00183,-7.181z"></path></g></g></svg>Call us:  (+373) 68030869</span><span>Or</span>
                        <a class="btn btn-text btn-primary" href="/email">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section_tit">
                        <h2 class="txtB">Our Team</h2>
                        <span class="three_line"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($team as $teams)
                    <div class="col-md-6 mb-30">
                        <div class="color_box bg_light_red img-scale">
                            <div class="left_picher">
                                <figure>
                                    <img src="{{asset('img/'.$teams->path)}}" alt=""/>
                                </figure>
                            </div>
                            <div class="detail_box">
                                <h3>{{$teams->name}}</h3>
                                <p class="card-text bold">{{$teams->position}}</p>
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
    <section class="padding ptb-xs-40">
        <div class="container">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section_tit">
                        <h2 class="txtB">Best Hotels</h2>
                        <span class="three_line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($hotels as $hotel)
                    <div class="col-lg-4 padd">
                        <div class="card h-100 mb-3">
                            <img src="{{asset('img/'.$hotel->path)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$hotel->name}}</h5>
                                <p class="card-text">Country: {{$hotel->country}}</p>
                                <a href="{{"hotels/".$hotel->id}}" class="btn btn-primary">Read about this hotel</a>
                                <add-cart-component product-id="{{$hotel->id}}" product-name="{{$hotel->name}}"
                                                    product-country="{{$hotel->country}}"
                                                    product-address="{{$hotel->address}}"
                                                    product-price="{{$hotel->price}}">
                                </add-cart-component>
                                <p class="card-text"><small class="text-muted "> Price for one person: {{$hotel->price}}
                                        $</small></p>
                                <p class="card-text"><small class="text-muted "> Rating:
                                        @for($i = 0; $i < $hotel->rating; $i++)
                                            <img src="https://img.icons8.com/officexs/16/000000/star.png"/>
                                        @endfor</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="padding ptb-xs-40 bg_contact light-color"
             style="background-image: url({{asset('/img/imgSlider5.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center call_headding">
                    <h3>Are you looking for a hotel ?</h3>
                    <div class="contact_info mt-30">
                        <a class="btn btn-text btn-primary" href="/email"> Click Here !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest__block padding ptb-xs-40">
        <div class="container">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section_tit">
                        <h2 class="txtB">Our Latest Articles</h2>
                        <span class="three_line"></span>

                    </div>
                    <p class="txtP pt-30">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the 's standard dummy text.
                    </p>
                </div>

            </div>

            <div class="row">
                @foreach($articles as $article)
                    <div class="col-lg-4">
                        <div class="img-scale">
                            <figure>
                                <img src="{{asset('img/'.$article->path)}}" alt="">
                            </figure>
                            <div class="latest__block-post gray-bg">
                                <div>
                                    {{$article->published_at}}
                                </div>
                                <h3 class="latest__block-title"><a
                                        href="{{"article/".$article->id}}">{{$article->title}}</a></h3>

                                <div class="flat-link flat-arrow sm  ">
                                    <a href="{{"article/".$article->id}}" class="more_btn__block">Read <i
                                            class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="padding ptb-xs-40 bg_contact light-color"
             style="background-image: url({{asset('/img/imgSlider4.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center call_headding">
                    <h3>Are you looking for more articles ?</h3>
                    <div class="contact_info mt-30">
                        <a class="btn btn-text btn-primary" href="/articles"> Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sponsors" class="padding ptb-xs-40">
        <div class="container ">
            <div class="row pb-60 pb-xs-40">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="section_tit">
                        <h2 class="txtB">Our Sponsors</h2>
                        <span class="three_line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="slide"><img src="{{asset('/img/sponsor1.png')}}"></div>
                    <div class="slide"><img src="{{asset('/img/sponsor2.png')}}"></div>
                </div>
                <div class="col-3">
                    <div class="slide"><img src="{{asset('/img/sponsor3.png')}}"></div>
                    <div class="slide"><img src="{{asset('/img/sponsor4.png')}}"></div>
                </div>
                <div class="col-3">
                    <div class="slide"><img src="{{asset('/img/sponsor5.png')}}"></div>
                    <div class="slide"><img src="{{asset('/img/sponsor6.png')}}"></div>
                </div>
                <div class="col-3">
                    <div class="slide"><img src="{{asset('/img/sponsor7.png')}}"></div>
                    <div class="slide"><img src="{{asset('/img/sponsor8.png')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="top_footer_info__block ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single_info__block">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="24" height="24"
                             viewBox="0 0 172 172"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                               stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                               font-family="none" font-size="none"
                               style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ffffff">
                                    <path
                                        d="M143.49817,110.99733c-4.515,-0.1075 -10.19817,-0.37267 -13.78867,-1.00333c-3.88433,-0.688 -8.557,-2.021 -11.8465,-3.04583c-2.58,-0.80267 -5.38933,-0.09317 -7.30283,1.81317l-15.8885,15.79533c-10.97933,-5.7835 -19.77283,-12.52017 -27.219,-20.00933c-7.48917,-7.44617 -14.22583,-16.23967 -20.00933,-27.219l15.79533,-15.89567c1.90633,-1.9135 2.61583,-4.72283 1.81317,-7.30283c-1.01767,-3.28233 -2.35783,-7.955 -3.03867,-11.83933c-0.63783,-3.5905 -0.89583,-9.27367 -1.0105,-13.78867c-0.09317,-3.90583 -3.27517,-7.00183 -7.181,-7.00183h-25.155c-3.139,0 -7.16667,2.35067 -7.16667,7.16667c0,32.5295 13.18667,63.597 35.58967,86.24367c22.64667,22.403 53.71417,35.58967 86.24367,35.58967c4.816,0 7.16667,-4.02767 7.16667,-7.16667v-25.155c0,-3.90583 -3.096,-7.08783 -7.00183,-7.181z"></path>
                                </g>
                            </g>
                        </svg>
                        <h4>(+373) 68030869 <span>Monday-Friday, 8am-7pm</span></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_info__block">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="24" height="24"
                             viewBox="0 0 172 172"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                               stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                               font-family="none" font-size="none"
                               style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ffffff">
                                    <path
                                        d="M86,14.33333c-39.49789,0 -71.66667,32.16877 -71.66667,71.66667c0,39.49789 32.16877,71.66667 71.66667,71.66667h35.83333v-14.33333h-35.83333c-31.75311,0 -57.33333,-25.58023 -57.33333,-57.33333c0,-31.75311 25.58023,-57.33333 57.33333,-57.33333c31.75311,0 57.33333,25.58023 57.33333,57.33333v10.75c0,6.02582 -4.72418,10.75 -10.75,10.75c-6.02582,0 -10.75,-4.72418 -10.75,-10.75v-10.75c0,-19.70532 -16.12802,-35.83333 -35.83333,-35.83333c-19.70532,0 -35.83333,16.12802 -35.83333,35.83333c0,19.70532 16.12802,35.83333 35.83333,35.83333c10.13048,0 19.26299,-4.30806 25.7972,-11.12793c4.52278,6.69078 12.16971,11.12793 20.78614,11.12793c13.76851,0 25.08333,-11.31482 25.08333,-25.08333v-10.75c0,-39.49789 -32.16877,-71.66667 -71.66667,-71.66667zM86,64.5c11.95901,0 21.5,9.54099 21.5,21.5c0,11.95901 -9.54099,21.5 -21.5,21.5c-11.95901,0 -21.5,-9.54099 -21.5,-21.5c0,-11.95901 9.54099,-21.5 21.5,-21.5z"></path>
                                </g>
                            </g>
                        </svg>
                        <h4>unudoitrei@support.com <span>Monday-Friday, 8am-7pm</span></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_info__block">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="24" height="24"
                             viewBox="0 0 172 172"
                             style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                               stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                               font-family="none" font-size="none"
                               style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ffffff">
                                    <path
                                        d="M28.65267,21.5c-7.88333,0 -14.24935,6.45 -14.24935,14.33333l-0.06999,85.986c0,7.91917 6.41417,14.34733 14.33333,14.34733h14.31934h0.014v28.66667l28.65267,-28.66667h71.66667c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-86c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333zM28.65267,35.83333h114.68066v86h-100.34733h-14.31934zM50.16667,57.33333v28.66667h14.33333l-14.33333,21.5h14.33333l14.33333,-21.5v-7.16667v-21.5zM93.16667,57.33333v28.66667h14.33333l-14.33333,21.5h14.33333l14.33333,-21.5v-7.16667v-21.5z"></path>
                                </g>
                            </g>
                        </svg>
                        <h4>Request a quote <span>Get all the information</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
