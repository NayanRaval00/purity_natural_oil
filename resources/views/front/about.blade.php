@include('front.includes.header')
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-46">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">About Our Farm</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url({{ asset('assets/images/four.jpg')}})"></div>
    </div>
</section>
<!-- Why choose us-->
<section class="section section-md section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="519" height="446" />
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
                <h2>Why Choose Us</h2>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Our Goals</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Our Vision</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Our Mission</a></li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-4-1">
                            <p>At Purity natural oil (opc) private limited we have
                                replaced animal force with electromechanical
                                power (matching animal movement RPM) to retain
                                oil’s natural nutrition intact.
                                Being an end-to-end natural extraction process,
                                there is no use of any refining, bleaching, or
                                deodorizing agent. The oil thus retains its original
                                unique aroma, rich flavor and color, and all its
                                nutritional value needed for good health.</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-4-2">
                            <p>Deliver satisfaction, quality assurance, and hygiene to
                                our consumers using the Traditional oil extraction
                                process.
                                Offer a work environment that inspires trust and
                                loyalty in people.
                                Engage in continuous efforts to explore new horizons
                                in our business.</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-4-3">
                            <p>To create a healthy and prosperous future for the
                                generations to come.
                                To share our knowledge about cold-pressed oil with
                                people around the globe, for a better tomorrow.
                                To serve hygienic, pure & Quality oil for good health
                                To become consumer’s most trusted brand
                            </p>
                            <div class="group-md group-middle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Projects-->
<section class="section section-md section-fluid bg-default">
    <div class="container">
        <h2>Our Products</h2>
    </div>
    <!-- Owl Carousel-->
    <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-stage-padding="15" data-xxl-stage-padding="0" data-autoplay="true" data-nav="true" data-dots="true">
        <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="420" height="308" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/images/first.jpg')}}" data-lightgallery="item"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="420" height="308" /></a>
                </div>
            </article>
            <div class="thumbnail-mary-description">
                <h5 class="thumbnail-mary-project"><a href="#">Farm Establishment</a></h5><span class="thumbnail-mary-decor"></span>
                <h5 class="thumbnail-mary-time">
                    <!-- <time datetime="1999">1999</time> -->
                </h5>
            </div>
        </div>
        <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="420" height="308" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ asset('assets/images/first.jpg')}}" data-lightgallery="item"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="420" height="308" /></a>
                </div>
            </article>
            <div class="thumbnail-mary-description">
                <h5 class="thumbnail-mary-project"><a href="#">New Partners</a></h5><span class="thumbnail-mary-decor"></span>
                <h5 class="thumbnail-mary-time">
                    <!-- <time datetime="2005">2005</time> -->
                </h5>
            </div>
        </div>
    </div>
</section>

<!-- What people say-->
<section class="section context-dark">
    <div class="parallax-container" data-parallax-img="{{ asset('assets/images/first.jpg')}}">
        <div class="parallax-content section-md bg-overlay-2-21">
            <div class="container">
                <div class="oh">
                    <h2 class="wow slideInUp" data-wow-delay="0s">What People Say</h2>
                </div>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ asset('assets/images/first.jpg')}}" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">I picked up a head of your lettuce at a local grocery store today. What an amazing and beautiful lettuce it is! I’ve never seen another so full and green and tempting.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Samantha Peterson</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ asset('assets/images/first.jpg')}}" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">I wanted to tell you how amazing it was to see the farm and how much we love the food. Your apples and carrots are just wonderful and their taste is great.</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">John Wilson</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                    <!-- Quote Lisa-->
                    <article class="quote-lisa">
                        <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="{{ asset('assets/images/first.jpg')}}" alt="" width="100" height="100" /></a>
                            <div class="quote-lisa-text">
                                <p class="q">The food from your farm is wonderful. So many nights when we sit down to dinner we can say everything on this plate is locally grown and delicious. Thank you!</p>
                            </div>
                            <h5 class="quote-lisa-cite"><a href="#">Kate Anderson</a></h5>
                            <p class="quote-lisa-status">Regular Client</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-md section-last bg-gray-100">
    <div class="container">
        <div class="oh">
            <h2 class="wow slideInUp" data-wow-delay="0s">Our Partners</h2>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-clients owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut"><a class="clients-modern" href="#"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="270" height="145" /></a><a class="clients-modern" href="#"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="270" height="145" /></a><a class="clients-modern" href="#"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="270" height="145" /></a><a class="clients-modern" href="#"><img src="{{ asset('assets/images/first.jpg')}}" alt="" width="270" height="145" /></a></div>
    </div>
</section>
@include('front.includes.footer')