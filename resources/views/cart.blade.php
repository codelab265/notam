@extends('layout.app')

@section('title', 'Shopping Cart')

@section('content')
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <div style="position:relative;display:inline-block;">
                                Shopping
                            </div>

                            <span>
                                Cart
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

    <div class="container">
        <div class="page-services">

            @if (Session::has('cart') && count(Session::get('cart')['items']) > 0)
                <div class="row">
                    <div class="col-12">
                        <div class="cart-items">
                            @foreach (Session::get('cart')['items'] as $id => $item)
                                <div class="service-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="cart-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset($item['item']->image) }}"
                                                        alt="{{ $item['item']->name }}">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="cart-content mt-3 mt-md-0">
                                                <h3>{{ $item['item']->name }}</h3>
                                                <p>{{ $item['item']->description }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="cart-price">
                                                <span>${{ number_format($item['item']->price, 2) }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="cart-quantity">
                                                <span>Qty: {{ $item['qty'] }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="cart-remove">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                                    <button type="submit"
                                                        class="btn btn-danger w-100 w-md-auto mt-3 mt-md-0"
                                                        style="position: relative; z-index: 10;">
                                                        <i class="fas fa-trash"></i>
                                                        Remove
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="cart-total work-item">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <h3>Cart Total</h3>
                                </div>
                                <div class="col-md-4 text-start text-md-center">
                                    <div class="total-price">
                                        <h4>Total: ${{ number_format(Session::get('cart')['totalPrice'], 2) }}</h4>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('checkout') }}" class="btn-default mt-3 mt-md-0">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="empty-cart text-center">
                            <h3>Your cart is empty</h3>
                            <a href="{{ route('shop') }}" class="btn btn-primary mt-3">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
