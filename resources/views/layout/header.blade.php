<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 70px;">
                    <span class="text-white font-weight-bold"
                        style="font-size: 24px; margin-left: 10px; font-weight: 700;">Notam</span>
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                            <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">
                                    <i class="fas fa-shopping-cart"></i> Cart
                                    <span
                                        class="badge badge-pill badge-danger">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="contact.html" class="btn-default">Contact Us</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
