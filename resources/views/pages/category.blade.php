@extends('layout')
@section('seoTitle')
    Category Page
@endsection
@section('seoDescription')
    Category page created by Macari Cristian
@endsection
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Amazing Categories</h1>
                        <span class="color-text-a">Category : {{$categories[0]->name}}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Category
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
                @foreach($categories as $category)
                    <div class="col-sm-4 padd">
                        <div class="card mb-3">
                            <img src="{{asset('img/'.$category->path)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->title}}</h5>
                                <p class="card-text">{{$category->short_description}}</p>
                                <a href="{{"/article/".$category->article_id}}" class="btn btn-primary">Read Article</a>
                                <p class="card-text"><small class="text-muted "> Created {{$category->create_at}}</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="pagination">
                {{$categories->links('paginator')}}
            </ul>
        </div>
    </section>
@endsection
