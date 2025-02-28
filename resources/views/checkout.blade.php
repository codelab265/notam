@extends('layout.app')

@section('title', 'Checkout')

@section('content')
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            Secure <span>Checkout</span>
                        </h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('cart') }}">cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-start">
                <!-- Checkout Form -->
                <div class="col-lg-8">
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3>checkout</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Shipping <span>Details</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form action="{{ route('checkout.process') }}" method="POST" class="wow fadeInUp"
                                data-wow-delay="0.25s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">first name</label>
                                        <input type="text" name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            value="{{ old('first_name') }}" placeholder="First Name" required>
                                        @error('first_name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">last name</label>
                                        <input type="text" name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            value="{{ old('last_name') }}" placeholder="Last Name" required>
                                        @error('last_name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">email address</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Email Address" required>
                                        @error('email')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">phone number</label>
                                        <input type="tel" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}" placeholder="Phone Number" required>
                                        @error('phone')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <label class="form-label">address</label>
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror"
                                            value="{{ old('address') }}" placeholder="Shipping Address" required>
                                        @error('address')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label">city</label>
                                        <input type="text" name="city"
                                            class="form-control @error('city') is-invalid @enderror"
                                            value="{{ old('city') }}" placeholder="City" required>
                                        @error('city')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label">state</label>
                                        <input type="text" name="state"
                                            class="form-control @error('state') is-invalid @enderror"
                                            value="{{ old('state') }}" placeholder="State" required>
                                        @error('state')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label class="form-label">zip code</label>
                                        <input type="text" name="zip_code"
                                            class="form-control @error('zip_code') is-invalid @enderror"
                                            value="{{ old('zip_code') }}" placeholder="ZIP Code" required>
                                        @error('zip_code')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <label class="form-label">country</label>
                                        <input type="text" name="country"
                                            class="form-control @error('country') is-invalid @enderror"
                                            value="{{ old('country') }}" placeholder="Country" required>
                                        @error('country')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="alert alert-info mb-4">
                                        After submitting your order, we will contact you to discuss payment options.
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Place Order</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3>summary</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Order <span>Details</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="contact-info-list">
                            @foreach ($cart['items'] as $item)
                                <div class="contact-info-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset($item['item']->image) }}" alt="{{ $item['item']->name }}"
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>{{ $item['item']->name }} <small>(x{{ $item['qty'] }})</small></h3>
                                        <p>${{ number_format($item['price'], 2) }}</p>
                                    </div>
                                </div>
                            @endforeach

                            <div class="contact-info-item total-price wow fadeInUp" data-wow-delay="0.5s">
                                <div class="contact-info-content">
                                    <h3>Total Amount</h3>
                                    <p class="h4">${{ number_format($cart['totalPrice'], 2) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
