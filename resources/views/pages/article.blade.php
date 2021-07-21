@extends('layout')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$article->title}}</h1>
                        <p class="color-text-a">Category:<a
                                href="{{"/category/".$article->category_id}}"> {{$article->name}}</a></p>
                        <p class="color-text-a">Tags:
                            @foreach($tags as $tag)<a href="{{"/tag/".$tag->tag_id}}"> {{$tag->tagName}}</a>@endforeach
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
                                <a href="/articles">Article</a>
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
                        <div class="row justify-content-between container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Comments</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(sizeof($comments)==0)
                        <h3 class="title-d">No comments</h3>
                    @endif
                    <div class="container">
                        <div class="row">
                            @foreach($comments as $comment)
                                <div class="col-lg-4 padd">
                                    <div class="card h-100 mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$comment->author}}</h5>
                                            <p class="card-text">{{$comment->message}}</p>
                                            <p class="card-text">
                                                <small class="text-muted ">Created {{$comment->updated_at}}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <ul class="pagination">
                            {{$comments->links('paginator')}}
                        </ul>
                    </div>
                    <div class="row justify-content-between container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Post a comment</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form  method="post"
                          action="{{"/article/".$article->id."/comments"}}"
                          novalidate>
                        @csrf
                        <div class="form-group">
                            <input name="author" placeholder="Your name"
                                   class="form-control  {{ $errors->has('author') ? ' has-error' : '' }}"/>
                            <p class="text-danger">{{ $errors->first('author') }}</p>
                        </div>

                        <div class="form-group">


                            <input type="hidden" name="article_id" value="{{ $article->id }}"/>

                            <textarea name="message"
                                      class="form-control {{ $errors->has('message') ? ' has-error' : '' }}"
                                      placeholder="Leave a comment" required min="4"></textarea>
                            <p class="text-danger">{{ $errors->first('message') }}</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
