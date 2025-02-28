@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            Contact <span>Us</span>
                        </h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
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
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3>get in touch</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Send Us a <span>Message</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form action="{{ route('contact.send') }}" method="POST" class="wow fadeInUp"
                                data-wow-delay="0.25s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label class="form-label">your name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Your Name" required>
                                        @error('name')
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

                                    <div class="form-group col-md-12 mb-4">
                                        <label class="form-label">subject</label>
                                        <input type="text" name="subject"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            value="{{ old('subject') }}" placeholder="Message Subject" required>
                                        @error('subject')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <label class="form-label">your message</label>
                                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
                                            placeholder="Type Your Message" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3>find us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Info</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="contact-info-list">
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h3>Address</h3>
                                    <p>123 Business Street<br>New York, NY 10001</p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h3>Phone</h3>
                                    <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>info@yourstore.com<br>support@yourstore.com</p>
                                </div>
                            </div>

                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h3>Working Hours</h3>
                                    <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
