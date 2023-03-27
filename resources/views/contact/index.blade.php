@extends('frontend.head')
@section('header')
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase">Contacts</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
@endsection

@section('content')
@if(count($errors) > 0)
    @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@include('sweetalert::alert')
{{--  @if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif  --}}
<div class="section-row">
    <div class="section-title">
        <h2 class="title">Contact Information</h2>
    </div>
    <p>Ingin menjadi riseller kami dengan harga murah?</p>
    <ul class="contact">
        <li><i class="fa fa-phone"></i> +62 812-2994-6655</li>
        <li><i class="fa fa-envelope"></i> <a href="#">adminofficial@sulthanah.com</a></li>
        <li><i class="fa fa-map-marker"></i> Mangunsari, Magelang</li>
    </ul>
</div>

<div class="section-row">
    <div class="section-title">
        <h2 class="title">Mail us</h2>
    </div>
    <form action="/contact_proses" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input class="input" type="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input class="input" type="text" name="subject" placeholder="Subject">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input class="input" type="number" name="notelp" placeholder="Whatsapp">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="input" name="message" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="primary-button">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('widget')
<!-- social widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Social Media</h2>
    </div>
    <div class="social-widget">
        <ul>
            <li>
                <a href="#" class="social-facebook">
                    <i class="fa fa-facebook"></i>
                    <span>21.2K<br>Followers</span>
                </a>
            </li>
            <li>
                <a href="#" class="social-twitter">
                    <i class="fa fa-twitter"></i>
                    <span>10.2K<br>Followers</span>
                </a>
            </li>
            <li>
                <a href="#" class="social-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <span>5K<br>Followers</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /social widget -->

<!-- newsletter widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Newsletter</h2>
    </div>
    <div class="newsletter-widget">
        <form>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
            <input class="input" name="newsletter" placeholder="Enter Your Email">
            <button class="primary-button">Subscribe</button>
        </form>
    </div>
</div>
<!-- /newsletter widget -->
@endsection
