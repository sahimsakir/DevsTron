@extends('layouts.app')
@section('title','DevsTron - Your Expectation Our Implementation')
@section('content')
    <!-- banner area start -->
    <div class="page-header style-5">
        <div class="banner-position">
            <div class="container">
                <div class="banner-content text-center">
                    <h3>Portfolio</h3>
                    <ul class="banner-link">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li><a class="active">Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- portfolio area start -->
    <div class="portfolio-area style-1">
        <div class="container">
            <div class="portfolio-wrapper">
                <div class="portfolio-list">
                    <ul class="portfolio-menu button-group">
                        <li class="button is-checked" data-filter="*">See All</li>
                        <li class="button" data-filter=".ap">Apps</li>
                        <li class="button" data-filter=".br">Website</li>
                        <li class="button" data-filter=".cr">ERP and POS</li>
                        <li class="button" data-filter=".lp">Digital Marketing</li>
                        <li class="button" data-filter=".pr">E-Commerce</li>
                    </ul>
                </div>
                <div class="grid">
                    <div class="grid-item lp pr br">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/06.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/06.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Apple Mobile Mockup</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item cr ap br lp">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/07.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/07.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Bata shows</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item pr ap lp">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/08.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/08.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Rainbo siramixe</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item cr pr br">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/10.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/10.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Sumsung Brand</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item cr br pr lp">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/11.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/11.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Electornic Metarial</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item ap lp cr">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/09.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/09.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Pnasomic Electronics</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item cr lp br ap">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/06.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/06.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Rainbo seramixe</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item lp cr ap br">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/12.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/12.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Pnasomic Electronics</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item ap cr br">
                        <div class="portfolio-thumb">
                            <div class="portfolio-image">
                                <img src="assets/images/portfolio/08.jpg" alt="portfolio">
                            </div>
                            <div class="hover_content">
                                <a href="assets/images/portfolio/08.jpg" class="img_popup leaf"
                                    data-rel="lightcase:myCollection">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="portfolio-description leaf text-center">
                                    <a href="/portfolio-show" class="portfolio-title">
                                        <h5 class="f_500 f_size_20 f_p">Rainbo color</h5>
                                    </a>
                                    <div class="links"><a href="#">Branding,</a><a href="#">Fashion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- portfolio area ends -->
@endsection