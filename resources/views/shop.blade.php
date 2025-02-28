@extends('layout.app')

@section('title', 'Shop')

@section('content')

    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <div style="position:relative;display:inline-block;">
                                Our
                            </div>

                            <span>
                                Products
                            </span>
                        </h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-services">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="service-image">
                                <a href="service-single.html" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                    </figure>
                                </a>
                            </div>
                            <div class="service-body">
                                <div class="service-content">
                                    <h3><a href="service-single.html">{{ $product->name }}</a></h3>
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="service-btn">
                                    <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <a href="#" data-cursor-text="Add to Cart"
                                            onclick="this.closest('form').submit();">
                                            <i class="fa fa-shopping-cart text-white" style="font-size: 20px;"></i>
                                        </a>


                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="our-shop bg-section">
        <div class="container">




            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <!-- Product Item Start -->
                        <div class="work-item wow fadeInUp">
                            <div class="work-image">
                                <figure class="image-anime">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </figure>
                            </div>
                            <div class="work-body">
                                <div class="work-content">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $product->description }}</p>
                                    <div class="product-price">
                                        <span>${{ number_format($product->price, 2) }}</span>
                                    </div>
                                </div>
                                <div class="work-btn d-flex justify-content-between align-items-center">

                                </div>
                            </div>
                        </div>
                        <!-- Product Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
