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
                                <a href="/">Home</a>
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
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-md-2 text-center">
                    <h2 class="txtB">KEEP IN TOUCH</h2>
                    <p class="txtP"> Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit
                        cursus. tellus eget condimentum rhoncus sem quam semper libero. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12  pb-40 pt-30">
                    <div class="row text-center">
                        <div class="col-md-4 col-lg-4 pb-xs-30"><img src="https://img.icons8.com/material-outlined/48/000000/phone.png"/>
                            <a  class="mt-15 text-dark"><br>(+373) 68030869</a></div>
                        <div class="col-md-4 col-lg-4 pb-xs-30"><img src="https://img.icons8.com/material/48/000000/worldwide-location--v1.png"/>
                            <p>Alba-Iulia 878/2, Chisinau, Moldova </p>
                        </div>
                        <div class="col-md-4 col-lg-4 pb-xs-30"><img src="https://img.icons8.com/material-rounded/48/000000/new-message.png"/>
                            <a class="mt-15 text-dark"><br>unudoitre@support.com</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-30">
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
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Enter Name" required>
                                        @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="Enter Email" required>
                                        @error('email')
                                        <span class="text-danger"> {{ $email }} </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control"
                                       placeholder="Enter subject" required>
                                @error('subject')
                                <span class="text-danger"> {{ $subject }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea type="text" name="content" id="content" class="form-control"
                                          placeholder="Enter Your Message" required></textarea>
                                @error('content')
                                <span class="text-danger"> {{ $content }} </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.8877771110233!2d28.758332015611096!3d47.04243287915138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cbd61a6c27a7c7%3A0x7d787e6cce4ccc7f!2sAlba-Iulia%20St%20113%2C%20Chi%C8%99in%C4%83u%202051!5e0!3m2!1sen!2s!4v1626218770687!5m2!1sen!2s"
        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection
