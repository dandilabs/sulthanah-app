@extends('frontend.head')
@section('header')
<!-- PAGE HEADER -->

<div id="post-header" class="page-header">
    @foreach($data as $isi )
        <div class="page-header-bg" style="background-image: url('{{ asset($isi->image) }}');"
            data-stellar-background-ratio="0.5">
        </div>
    @endforeach
    @foreach($data as $isi )
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-category">
                        <a href="category.html">{{ $isi->category->name }}</a>
                    </div>
                    <h1>{{ $isi->judul }}</h1>
                    <ul class="post-meta">
                        <li><a href="author.html">{{ $isi->users->name }}</a></li>
                        <li>{{ \Carbon\Carbon::parse($isi->created_at)->translatedFormat('d F Y') }}</li>
                        {{-- <li><i class="fa fa-comments"></i> 3</li>
                    <li><i class="fa fa-eye"></i> 807</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- /PAGE HEADER -->


@endsection
@section('content')
<!-- post content -->
@foreach($data as $content )
    <div class="section-row">
        {{--  <blockquote class="blockquote">
            <p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu
                albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem
                vis,
                aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
            <footer class="blockquote-footer">John Doe</footer>
        </blockquote>  --}}
        {{--  <p>Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel.
            Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait
            oporteat
            eos, id usu sint numquam sententiae.</p>  --}}
        <figure>
            <img src="{{ asset($content->image) }}" alt="">
        </figure>
        <h3>{{ $content->judul }}</h3>
        <p>{!! $content->content !!}</p>
    </div>
    <!-- /post content -->

@endforeach

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

<!-- category widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
        <ul>
            @foreach ( $category as $data )
            <li>
                <a href="#">{{ $data->name }}
                    <span>{{ $data->posts->count() }}</span></a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- /category widget -->

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

<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Popular Posts</h2>
    </div>
    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/widget-3.jpg') }}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title">
                <a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a>
            </h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/widget-2.jpg') }}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Technology</a>
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title">
                <a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a>
            </h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/widget-4.jpg') }}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Health</a>
            </div>
            <h3 class="post-title">
                <a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a>
            </h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/widget-5.jpg') }}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Health</a>
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title">
                <a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a>
            </h3>
        </div>
    </div>
    <!-- /post -->
</div>
<!-- /post widget -->
@endsection
