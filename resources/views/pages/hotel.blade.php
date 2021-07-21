@extends('layout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$hotel->name}}</h1>
                        <p class="color-text-a">Country: {{$hotel->country}}</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/hotels">Hotels</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$hotel->name}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="single-article ">
        <div class="container">
            <div class="row">


                <div class="justify-content-between container">
                    <div>
                        <p class="color-text-a padd">
                            {{$hotel->description}}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Specification</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 ">
                            <h4 class="pb-40 pt-90">Country : {{$hotel->country}}</h4>
                            <h4 class="pt-30">Rating :
                                @for($i = 0; $i < $hotel->rating; $i++)
                                    <img src="https://img.icons8.com/officexs/16/000000/star.png"/>
                                    @endfor</small></p>
                            </h4>
                            <h4 class="pt-30">
                                Price for one person/night: {{$hotel->price}}
                            </h4>
                            <div class="row pt-30">
                                <div class="col-md-6 col-lg-6 pb-xs-30">
                                    <img src="https://img.icons8.com/material/48/000000/worldwide-location--v1.png"/>
                                    <p>{{$hotel->email}} </p></div>
                                <div class="col-md-6 col-lg-6 pb-xs-30">
                                    <img src="https://img.icons8.com/material-rounded/48/000000/new-message.png"/>
                                    <a class="mt-15 text-dark"><br>{{$hotel->address}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="img-article col-lg-6">
                            <img src="{{asset('img/'.$hotel->path)}}" alt="imgArticle">
                        </div>
                    </div>
                    <div>
                        <add-cart-component product-id="{{$hotel->id}}" product-name="{{$hotel->name}}"
                                            product-country="{{$hotel->country}}"
                                            product-address="{{$hotel->address}}"
                                            product-price="{{$hotel->price}}">
                        </add-cart-component>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
