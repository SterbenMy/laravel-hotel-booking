@extends('layout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Hotels</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Hotels
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="cards">
        <div class="container">
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
                                <p class="card-text"><small class="text-muted "> Price for one person: {{$hotel->price}} $</small></p>
                                <p class="card-text"><small class="text-muted "> Rating:
                                        @for($i = 0; $i < $hotel->rating; $i++)
                                            <img src="https://img.icons8.com/officexs/16/000000/star.png"/>
                                        @endfor</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="pagination">
                {{$hotels->links('paginator')}}
            </ul>
        </div>
    </section>

@endsection
