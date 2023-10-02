@extends('layouts.app')
@section('title','DevsTron - Your Expectation Our Implementation')
@section('content')
    <!-- banner area start -->
    <div class="page-header style-1">
        <div class="banner-position">
            <div class="container">
                <div class="banner-content">
                    <h3>Contact Us</h3>
                    <ul class="banner-link">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li><a class="active">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- contact location link area -->
    <div class="contact-link">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
                                    <i class="fas fa-map-marker-alt"></i>
                                </a>
                            </div>
                            <div class="right-item">
                                <p>12NA2, Sraboni Building, Khilket.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
                                    <i class="fas fa-phone"></i>
                                </a>
                            </div>
                            <div class="right-item">
                                <p>(+88) 01516-117503</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="left-item">
                                <a href="#">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                            <div class="right-item">
                                <p>hello@devstron.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-location">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="location-map">
                        <div id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d645.17042268864!2d90.4289770344267!3d23.83157331261753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7c542b25e23%3A0x2209923732214349!2sSraboni%20building!5e0!3m2!1sen!2sbd!4v1668505004951!5m2!1sen!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <form action="#" method="POST" id="commentform" class="comment-form">
                            <input type="text" name="name" class="" placeholder="Name*">
                            <input type="email" name="email" class="" placeholder="Email*">
                            <input type="text" name="subject" class="" placeholder="Subject*">
                            <textarea name="text" id="role" cols="30" rows="10" placeholder="Message*"></textarea>
                            <button type="submit" class="contact-btn">
                                <span>Submit Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  contact location link ends -->
@endsection