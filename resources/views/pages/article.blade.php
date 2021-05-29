@extends('layout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$article->title}}</h1>
                        <p class="color-text-a">Category:<a  href="{{"/category/".$article->category_id}}"> {{$article->name}}</a></p>
                        <p class="color-text-a">Tags:
                            @foreach($tags as $tag)<a  href="{{"/tag/".$tag->tag_id}}"> {{$tag->tagName}}</a>@endforeach
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/">Article</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$article->title}}
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
                <div class="col-sm-12">
                    <div class="img-article">
                        <img src="{{asset('img/'.$article->path)}}" alt="imgArticle">
                    </div>
                    <div class="row justify-content-between container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">{{$article->title}}</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="color-text-a padd">
                                {{$article->content}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
