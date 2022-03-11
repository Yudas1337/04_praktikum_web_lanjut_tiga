@section('title', 'Halaman Home')
@extends('layouts.templates.main')
@section('main-content')

<section class="slider_section">
    <div class="banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                    <div class="text-bg">
                        <h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
                        <a href="{{ route('category') }}">Shop Now <i class='fa fa-angle-right'></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-img">
                        <figure><img src="{{ asset('assets/images/bg.jpg') }}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- discount -->
<div class="container">
    <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{ asset('assets/images/discount.jpg') }}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{ asset('assets/images/discount.jpg') }}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="{{ asset('assets/images/discount.jpg') }}" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end discount -->
<!-- trending -->
<div class="trending">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Featured <strong class="black">Products</strong></h2>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach($featured as $list)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 {{ ($loop->iteration % 2 == 1 ? 'margitop' : '') }}">
                <a href="{{ route('categories.show' , $list->slug) }}">
                <div class="trending-box">
                    <figure><img src="{{ $list->image }}" /></figure>
                    <h3>{{ substr($list->name,0, 10) }}</h3>
                </div>
            </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- end trending -->

<!-- our brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Latest <strong class="black">Products</strong></h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            @foreach($latest as $list)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <a href="{{ route('categories.show' , $list->slug) }}">
                <div class="brand-box">
                    <i><img src="{{ $list->image }}"/></i>
                    <h3>{{ substr($list->name,0, 10) }}</h3>
                    <span>{{ "Rp " . number_format($list->price,2,',','.') }}</span>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end our brand -->
<!-- map -->
<div class="contact">
    <div class="container-fluid padddd">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Contact <strong class="black">Us</strong></h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                 <div class="map_section">
         <div id="map">
         </div>
       </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                <form class="main_form" method="POST" action="{{ url('contact-us') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" autocomplete="off" placeholder="Name" type="text" name="name">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" autocomplete="off" placeholder="Email" type="text" name="email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <input class="form-control" autocomplete="off" placeholder="Phone" type="text" name="phone">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <textarea class="textarea" autocomplete="off" placeholder="Message" type="text" name="message"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <button class="send">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end map -->

@endsection