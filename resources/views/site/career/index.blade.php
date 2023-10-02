@extends('layouts.app')
@section('title','DevsTron - Your Expectation Our Implementation')
@section('content')
<!-- banner area start -->
<div class="page-header style-4">
    <div class="banner-position">
        <div class="container">
            <div class="banner-content">
                <h3>Career</h3>
                <ul class="banner-link">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li><a class="active">Career</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner area ends -->

<!-- pricing area start -->
<div class="pricing-area style-1 style-2 style-5">
    <div class="container">
        <div class="section-heading text-center section-heading">
            <span>Career</span>
            <h3>Join Our Team</h3>
            <p>
                Please check the suitable opening for you and apply now.
            </p>
        </div>
        <div class="pricing-wrapper">
            <div class="row justify-content-center">
                {{-- <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <lottie-player src="https://lottie.host/74e519ee-315b-4431-bad1-95a7116ae4a4/lqkmmZ518C.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                    <h4 style="padding:20px; color: crimson">Currently We Don't Have Any Opening</h4>
                </div> --}}
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="price-item text-justify price-style">
                        <div class="price-thumb">
                            <div class="price_t">
                                <h5>Software Enginner</h5>
                                <p><span>Tech</span>TEAM</p>
                            </div>
                        </div>
                        <div class="price-list">
                            <ul>
                                <li><span>Employment Type:</span> Full Time</li>
                                <li><span>Location:</span> Dhaka</li>
                                <li><span>Workplace type:</span> Hybrid</li>
                                <li><span>Educational Background:</span> BSc</li>
                                <li><span>Work Experience:</span> 1-3 Years</li>
                            </ul>
                            <a href="/career-show" class="custom-btn">
                                <span>Apply</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                    <div class="price-item text-justify price-style">
                        <div class="price-thumb">
                            <div class="price_t">
                                <h5>Software Enginner</h5>
                                <p><span>Tech</span>TEAM</p>
                            </div>
                        </div>
                        <div class="price-list">
                            <ul>
                                <li><span>Employment Type:</span> Full Time</li>
                                <li><span>Location:</span> Dhaka</li>
                                <li><span>Workplace type:</span> Hybrid</li>
                                <li><span>Educational Background:</span> BSc</li>
                                <li><span>Work Experience:</span> 1-3 Years</li>
                            </ul>
                            <a href="/career-show" class="custom-btn">
                                <span>Apply</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6 col-12">
                    <div class="price-item text-justify price-style">
                        <div class="price-thumb">
                            <div class="price_t">
                                <h5>Software Enginner</h5>
                                <p><span>Tech</span>TEAM</p>
                            </div>
                        </div>
                        <div class="price-list">
                            <ul>
                                <li><span>Employment Type:</span> Full Time</li>
                                <li><span>Location:</span> Dhaka</li>
                                <li><span>Workplace type:</span> Hybrid</li>
                                <li><span>Educational Background:</span> BSc</li>
                                <li><span>Work Experience:</span> 1-3 Years</li>
                            </ul>
                            <a href="/career-show" class="custom-btn">
                                <span>Apply</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- pricing area ennds -->
@endsection