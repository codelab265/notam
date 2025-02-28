<div class="hero">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
        </video>
        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Where <span>creativity</span> meets
                            strategy</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We're a full-service business solutions agency specializing in branding, web design, and
                            creative strategies that elevate businesses.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="portfolio.html" class="btn-default">view our portfolio</a>
                    </div>
                    <!-- Hero Button End -->
                </div>
            </div>

            <div class="col-lg-5">
                <!-- Hero Image Start -->
                <div class="hero-images">
                    <div class="hero-image-box-1">
                        <div class="hero-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hero-img-1.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="hero-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hero-img-2.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="hero-image-box-2">
                        <div class="hero-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hero-img-3.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="hero-image-box-1">
                        <div class="hero-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hero-img-4.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="hero-img">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/images/hero-img-5.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- Hero Image End -->
            </div>
        </div>
    </div>
</div>
