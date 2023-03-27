@extends('frontend.head')
@section('header')
<!-- container -->
<div class="container">
    <!-- row -->
    <div id="hot-post" class="row hot-post">
        <div class="col-md-8 hot-post-left">
            <!-- post -->
            <div class="post post-thumb">
                <a class="post-img" href="blog-post.html"><img
                        src="{{ asset('frontend/img/header/header-1.png') }}" alt=""></a>
                {{-- <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">Lifestyle</a>
                    </div>
                    <h3 class="post-title title-lg"><a href="blog-post.html">Postea senserit id eos, vivendo
                            periculis ei qui</a></h3>
                    <ul class="post-meta">
                        <li><a href="author.html">John Doe</a></li>
                        <li>20 April 2018</li>
                    </ul>
                </div> --}}
            </div>
            <!-- /post -->
        </div>
        <div class="col-md-4 hot-post-right">
            <!-- post -->
            <div class="post post-thumb">
                <a class="post-img" href="blog-post.html"><img
                        src="{{ asset('frontend/img/header/header-2.png') }}" alt=""></a>
                {{-- <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">Lifestyle</a>
                    </div>
                    <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus
                            error sit</a></h3>
                    <ul class="post-meta">
                        <li><a href="author.html">John Doe</a></li>
                        <li>20 April 2018</li>
                    </ul>
                </div> --}}
            </div>
            <!-- /post -->

            <!-- post -->
            <div class="post post-thumb">
                <a class="post-img" href="blog-post.html"><img
                        src="{{ asset('frontend/img/header/header-3.png') }}" alt=""></a>
                {{-- <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">Fashion</a>
                        <a href="category.html">Lifestyle</a>
                    </div>
                    <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id
                            ullum laboramus persequeris.</a></h3>
                    <ul class="post-meta">
                        <li><a href="author.html">John Doe</a></li>
                        <li>20 April 2018</li>
                    </ul>
                </div> --}}
            </div>
            <!-- /post -->
        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">Recent posts</h2>
        </div>
    </div>
    <!-- post -->
    @foreach($data as $blog )
        <div class="col-md-6">
            <div class="post">
                <a class="post-img" href="{{ route('blog.isi', $blog->slug) }}"><img src="{{ $blog->image }}" alt=""></a>
                <div class="post-body">
                    <div class="post-category">
                        <a href="category.html">{{ $blog->category->name }}</a>
                    </div>
                    <h3 class="post-title"><a href="#">{{ $blog->judul }}</a></h3>
                    <ul class="post-meta">
                        <li><a href="author.html">{{ $blog->users->name }}</a></li>
                        <li>{{ $blog->created_at->diffForHumans() }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /post -->
    @endforeach
</div>
<!-- /row -->
<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">Fashion & Travel</h2>
        </div>
    </div>
    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-10.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Travel</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum,
                        labitur persequeris definitionem quo cu?</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-12.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Lifestyle</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Sed ut perspiciatis, unde
                        omnis iste natus error sit</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-13.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Travel</a>
                    <a href="category.html">Lifestyle</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit
                        tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->
</div>
<!-- /row -->
<!-- row -->
<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">Technology & Health</h2>
        </div>
    </div>
    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-4.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Health</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos,
                        vivendo periculis ei qui</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-1.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Travel</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit
                        tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="col-md-4">
        <div class="post post-sm">
            <a class="post-img" href="blog-post.html"><img
                    src="{{ asset('frontend/img/post-3.jpg') }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="category.html">Lifestyle</a>
                </div>
                <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum,
                        labitur persequeris definitionem quo cu?</a></h3>
                <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post -->
</div>
<!-- /row -->
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
            @foreach ( $category_widget as $data )
            <li>
                <a href="{{ route('blog.category', $data->slug) }}">{{ $data->name }}
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
