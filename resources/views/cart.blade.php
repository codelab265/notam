@extends('layout.app')

@section('title', 'Shopping Cart')

@section('content')
    <div class="cart-section bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">shopping cart</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Your <span>Cart Items</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            @if (Session::has('cart') && count(Session::get('cart')['items']) > 0)
                <div class="row">
                    <div class="col-12">
                        <div class="cart-items">
                            @foreach (Session::get('cart')['items'] as $id => $item)
                                <div class="cart-item work-item wow fadeInUp">
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
                                            <div class="cart-content">
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
                                                    <button type="submit" class="btn btn-danger">Remove</button>
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
                                <div class="col-md-6">
                                    <h3>Cart Total</h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="total-price">
                                        <h4>Total: ${{ number_format(Session::get('cart')['totalPrice'], 2) }}</h4>
                                    </div>
                                    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
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

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
