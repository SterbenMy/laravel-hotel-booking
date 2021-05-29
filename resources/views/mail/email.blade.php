@extends('layout')
@section('seoTitle')
    Contact Page
@endsection
@section('seoDescription')
    Contact page created by Macari Cristian
@endsection
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Contact Us</h1>
                        <span class="color-text-a">Contact</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container padd">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact-form">

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{'/email'}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                                    @error('email')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject">
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea type="text" name="content" id="content" class="form-control" placeholder="Enter Your Message"></textarea>
                            @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
