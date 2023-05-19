@extends('layouts.app')

@section('content')

<!-- Slider Start -->
    <div class="rs-slider slider-style4">
        <div class="slider slider-slide-1">
            <div class="slider-item" style="background-image: url(assets/images/slider/style1/h4-2.jpg);">
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                              <span class="sl-subtitle wow fadeInDown">
                                      <img class="sl-icons" src="{{asset('assets/images/slider/style1/icon2.png')}}" alt="Images">
                                      Roofing Construction
                                  </span>
                            <h1 class="sl-title fadeInLeft">
                                best roofing<br>
                                Solutions
                            </h1>
                            <p class="sl-desc wow fadeInLeft2">
                                Leverage agile frameworks to provide a robust synopsis for high<br>
                                level overviews iterative approaches.
                            </p>
                               <div class="slider-bottom wow fadeinup">
                                   <a class="readon red-btn" href="contact.html">Discover More</a>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slide-bg2" style="background-image: url(assets/images/slider/style1/h4-2.jpg);">
                <div class="container custom13">
                    <div class="slider-inner">
                        <div class="content-part">
                            <span class="sl-subtitle wow fadeInDown">
                                   <img class="sl-icons" src="{{asset('assets/images/slider/style1/icon2.png')}}" alt="Images">
                                   Roofing Construction
                               </span>
                            <h1 class="sl-title wow fadeInLeft">
                                best roofing<br>
                                Solutions
                            </h1>
                            <p class="sl-desc wow fadeInLeft2">
                                Leverage agile frameworks to provide a robust synopsis for high<br>
                                level overviews iterative approaches.
                            </p>
                               <div class="slider-bottom wow fadeinup">
                                   <a class="readon red-btn" href="contact.html">Discover More</a>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Contact Start -->
    <div class="rs-contact contact-style2">
        <div class="container">
            <div class="requset-contact">
                <div class="sec-title mb-40 md-mb-30">
                    <h2 class="title title2">
                        Request A Services
                    </h2>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-sm-6 mb-30">
                        <span class="wpcf7-form-control-wrap">
                            <input type="text" id="name" name="name" placeholder=" Name" required="">
                        </span>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <span class="wpcf7-form-control-wrap arrow2">
                            <input type="text" id="phone-number" name="phone-number" placeholder="Phone Number" required="">
                        </span>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <span class="wpcf7-form-control-wrap">
                            <input type="text" id="email" name="email" placeholder="Email" required="">
                        </span>
                    </div>
                    <div class="col-lg-4 col-sm-6 md-mb-30">
                        <span class="wpcf7-form-control-wrap arrow3">
                            <input type="text" id="your-address" name="your-address" placeholder="Your Address" required="">
                        </span>
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-mb-30">
                        <span class="wpcf7-form-control-wrap arrow4 Services services_select">
                            <select name="Services select" id="default_hide">
                                <option>Services</option>
                                <option>General construction</option>
                                <option>Modified Roofing</option>
                                <option>Metal Roofing</option>
                                <option>Vegetative Roofing</option>
                                <option>Inspections</option>
                                <option>Siding & Gutters</option>
                            </select>

                        </span>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="services-btn">
                            <p class="submit-btn">
                                <input type="submit" value="Submit Services Request" class="Submit Services Request">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- About Start -->
    <div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-75">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-50">
                    <div class="about-image-wrap">
                        <div class="images-part">
                            <img class="main-img" src="{{asset('assets/images/about/style2/about-1.png')}}" alt="About">
                            <img class="top-img1" src="{{asset('assets/images/about/style2/about-2.png')}}" alt="About">
                            <img class="middle-img2" src="{{asset('assets/images/about/style2/about-3.png')}}" alt="About">
                            <img class="bottom-img3" src="{{asset('assets/images/about/style2/about-4.png')}}" alt="About">
                        </div>
                        <div class="rs-addon-services">
                           <div class="services-icon">
                               <img src="{{asset('assets/images/shape-2.png')}}" alt="favicon">
                           </div>
                           <div class="services-text">
                               <h2 class="title"> Leading Roof Repair Agency Since 2001</h2>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-80 md-pl-15">
                    <div class="sec-title">
                        <span class="sub-text sub-text3">
                            <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                            About Us
                        </span>
                        <h2 class="title pb-20">
                            Committed to high quality roofing services
                        </h2>
                        <p class="desc pb-32">
                            Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 md-mb-30">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/about/style2/ser-icon1.png')}}" alt="About">
                                    </div>
                                    <div class="services-text">
                                        <h2 class="title"> Commercial <br>Roofing</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/about/style2/ser-icon2.png')}}" alt="About">
                                    </div>
                                    <div class="services-text">
                                        <h2 class="title"> Residential <br>Roofing</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="desc pt-30">
                            Corporate strategy frameworks to provide a robust synopsis for high level overviews. Iterative approaches to data foster to collaborative thinking to empowerment corporate strategy.
                        </p>
                        <div class="btn-part mt-45">
                            <a class="readon red-btn know-radius" href="about.html">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Section Start -->
    <div class="rs-services services-style4 bg10 pt-120 pb-120 md-pt-80 md-pb-80" style="background: url(assets/images/bg/service-bg.jpg);">
        <div class="container">
            <div class="sec-title text-center mb-60 md-mb-40">
                <span class="sub-text sub-text3 white-color">
                    <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                    What We Do
                </span>
                <h2 class="title white-color">
                    Leading roof repair and<br>
                    re-roofing services
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-1.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="general-construction.html">General construction</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="general-construction.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-2.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="services-style1.html">Modified Roofing</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="services-style1.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-3.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="services-style1.html">Metal Roofing</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="services-style1.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mb-40">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-4.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="services-style1.html">Vegetative Roofing</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="services-style1.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sm-mb-40">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-5.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="services-style1.html">Inspections</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="services-style1.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="services-image">
                            <img src="{{asset('assets/images/services/style4/service-6.png')}}" alt="Images">
                        </div>
                        <div class="services-text">
                            <div class="services-inner">
                                <h3 class="title"><a href="services-style1.html">Siding & Gutters</a></h3>
                                <div class="services-btn">
                                    <a class="red-btn-text" href="services-style1.html"><i class="fa flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Project Section Start -->
    <div class="rs-project project-style2 project-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-55 md-mb-40">
                <span class="sub-text sub-text3">
                    <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                    Latest Project
                </span>
                <h2 class="title">
                    View our latest projects.
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 md-mb-30">
                    <div class="project-item mb-30">
                        <div class="project-img">
                            <img src="{{asset('assets/images/project/style2/port-1.jpg')}}" alt="images">
                        </div>
                        <div class="project-content">
                            <div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
                            <div class="project-inner">
                                <h3 class="title"><a href="projects-single.html">Jewelers Mutual</a></h3>
                                <span class="category"><a href="projects-single.html">Masonry</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/images/project/style2/port-3.jpg')}}" alt="images">
                        </div>
                        <div class="project-content">
                            <div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
                            <div class="project-inner">
                                <h3 class="title"><a href="projects-single.html">Historic Restoration</a></h3>
                                <span class="category"><a href="projects-single.html">Masonry</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="project-item mb-30">
                        <div class="project-img">
                            <img src="{{asset('assets/images/project/style2/port-2.jpg')}}" alt="images">
                        </div>
                        <div class="project-content">
                            <div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
                            <div class="project-inner">
                                <h3 class="title"><a href="projects-single.html">Edison Middle School</a></h3>
                                <span class="category"><a href="projects-single.html">Masonry</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/images/project/style2/port-4.jpg')}}" alt="images">
                        </div>
                        <div class="project-content">
                            <div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
                            <div class="project-inner">
                                <h3 class="title"><a href="projects-single.html">Olson’s Piggly Wiggly</a></h3>
                                <span class="category"><a href="projects-single.html">Masonry</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Section End -->

    <!-- Why Choose Start -->
    <div class="rs-choose choose-style3">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="choose-widget-content bg10" style="background: url(assets/images/bg/service-bg.jpg);">
                    <div class="sec-title mb-50 md-mb-35">
                        <span class="sub-text sub-text3 white-color">
                            <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                            Why Choose Us
                        </span>
                        <h2 class="title white-color">
                            People choose us for our<br>
                            quality craftsmanship
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="rs-addon-services">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/choose/style1/icons/1.png')}}" alt="">
                                    </div>
                                    <div class="services-text">
                                        <div class="services-title">
                                            <h3 class="title"><a href="general-construction.html">Quick & Easy</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="rs-addon-services">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/choose/style1/icons/2.png')}}" alt="">
                                    </div>
                                    <div class="services-text">
                                        <div class="services-title">
                                            <h3 class="title"><a href="general-construction.html">No-Obligation</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 xs-mb-30">
                            <div class="rs-addon-services">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/choose/style1/icons/3.png')}}" alt="">
                                    </div>
                                    <div class="services-text">
                                        <div class="services-title">
                                            <h3 class="title"><a href="general-construction.html">Efficient & Accurate</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="rs-addon-services">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="{{asset('assets/images/choose/style1/icons/4.png')}}" alt="">
                                    </div>
                                    <div class="services-text">
                                        <div class="services-title">
                                            <h3 class="title"><a href="general-construction.html">Fast & Accurate</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-item"  style="background-image: url(assets/images/video/video-image2.jpg);">
                    <div class="rs-videos red-videos">
                        <div class="animate-border">
                            <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contact-bd" style="background-image: url(assets/images/bg/contact-bd.jpg);">
                    <div class="prelements-heading">
                        <div class="title-inner">
                            <h2 class="title">Any emergency help call us</h2>
                        </div>
                        <div class="description">
                            <p>(325) 512-9895</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose End -->

    <!-- Testimonial Section Start -->
    <div id="rs-testimonial" class="rs-testimonial testimonial-style2 testimonial-modify1 pt-120 pb-120 md-pt-80 md-pb-80 sm-pb-45">
        <div class="container">
            <div class="sec-title text-center mb-60 md-mb-40">
                <span class="sub-text sub-text3">
                    <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                    Testimonials
                </span>
                <h2 class="title">
                    Our clients reviews.
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="testi-item">
                   <div class="item-content">
                           <span><img src="{{asset('assets/images/testimonial/style1/quote2.png')}}" alt="Testimonial"></span>
                           <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                   </div>
                   <div class="testi-content">
                           <div class="image-wrap">
                               <img src="{{asset('assets/images/testimonial/style1/testi1.jpg')}}" alt="Testimonial">
                           </div>
                           <div class="testi-information">
                               <div class="testi-name">David M. Martin</div>
                               <span class="testi-title">CEO, Pro Theme</span>
                           </div>
                   </div>
                </div>
                <div class="testi-item">
                   <div class="item-content">
                           <span><img src="{{asset('assets/images/testimonial/style1/quote2.png')}}" alt="Testimonial"></span>
                           <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                   </div>
                   <div class="testi-content">
                           <div class="image-wrap">
                               <img src="{{asset('assets/images/testimonial/style1/testi2.jpg')}}" alt="Testimonial">
                           </div>
                           <div class="testi-information">
                               <div class="testi-name">Jessica Alba</div>
                               <span class="testi-title">Manager</span>
                           </div>
                   </div>
                </div>
                <div class="testi-item">
                   <div class="item-content">
                           <span><img src="{{asset('assets/images/testimonial/style1/quote2.png')}}" alt="Testimonial"></span>
                           <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                   </div>
                   <div class="testi-content">
                           <div class="image-wrap">
                               <img src="{{asset('assets/images/testimonial/style1/testi3.jpg')}}" alt="Testimonial">
                           </div>
                           <div class="testi-information">
                               <div class="testi-name">Abdur Rashid</div>
                               <span class="testi-title">CEO, Brick Consulting</span>
                           </div>
                   </div>
                </div>
                <div class="testi-item">
                   <div class="item-content">
                           <span><img src="{{asset('assets/images/testimonial/style1/quote2.png')}}" alt="Testimonial"></span>
                           <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                   </div>
                   <div class="testi-content">
                           <div class="image-wrap">
                               <img src="{{asset('assets/images/testimonial/style1/testi4.jpg')}}" alt="Testimonial">
                           </div>
                           <div class="testi-information">
                               <div class="testi-name">Maria Masud</div>
                               <span class="testi-title">Apps Developer</span>
                           </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Partner Start -->
    <div class="rs-partner partner-main-home partner-modify3">
        <div class="container">
            <div class="partner-content-widget">
                <div class="rs-carousel owl-carousel"
                    data-loop="true"
                    data-items="5"
                    data-margin="30"
                    data-autoplay="true"
                    data-hoverpause="true"
                    data-autoplay-timeout="5000"
                    data-smart-speed="800"
                    data-dots="false"
                    data-nav="false"
                    data-nav-speed="false"

                    data-md-device="5"
                    data-md-device-nav="false"
                    data-md-device-dots="false"
                    data-center-mode="false"

                    data-ipad-device2="4"
                    data-ipad-device-nav2="false"
                    data-ipad-device-dots2="false"

                    data-ipad-device="4"
                    data-ipad-device-nav="false"
                    data-ipad-device-dots="false"

                    data-mobile-device="2"
                    data-mobile-device-nav="false"
                    data-mobile-device-dots="false">
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/1.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/1.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/2.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/2.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/3.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/3.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/4.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/4.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/5.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/5.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/6.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/6.png')}}" title="" alt="">
                        </a>
                    </div>
                    <div class="logo-img">
                        <a href="https://devsdesign.net">
                            <img class="hovers-logos rs-grid-img" src="{{asset('assets/images/partner/style1/7.png')}}" title="" alt="">
                            <img class="mains-logos rs-grid-img " src="{{asset('assets/images/partner/style1/7.png')}}" title="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->

    <!-- Team Section Start -->
    <div class="rs-team team-style3 bg11 pt-120 pb-120 md-pt-80 md-pb-80" style="background: url(assets/images/bg/team-bg.jpg);">
        <div class="container">
            <div class="sec-title text-center mb-60 md-mb-40">
                <span class="sub-text sub-text3 white-color">
                    <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                    Meet Our Team
                </span>
                <h2 class="title white-color">
                    Meet our roofing experts
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm1.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Xavier Davids</a>
                                </h3>
                                <span class="team-title">Builder Advisor</span>
                            </div>
                               <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                   <i class="fi fi-rr-share share-i"></i>
                               </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm2.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Davis Youn</a>
                                </h3>
                                <span class="team-title">Architecture</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm3.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Thomas Arthur</a>
                                </h3>
                                <span class="team-title">Foreman</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm4.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Leo Harnent Keorn</a>
                                </h3>
                                <span class="team-title">Construction Worker</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm5.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">John William</a>
                                </h3>
                                <span class="team-title">CEO & Engineer</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm6.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Navin Thapa</a>
                                </h3>
                                <span class="team-title">Project Manager</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm1.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Xavier Davids</a>
                                </h3>
                                <span class="team-title">Builder Advisor</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm2.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Davis Youn</a>
                                </h3>
                                <span class="team-title">Architecture</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-inner-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="{{asset('assets/images/team/tm3.jpg')}}" alt="Team"></a>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3 class="team-name">
                                    <a href="team-single.html">Thomas Arthur</a>
                                </h3>
                                <span class="team-title">Foreman</span>
                            </div>
                            <div class="plus-team">
                                   <div class="social-icons">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-instagram"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <i class="fi fi-rr-share share-i"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Blog Section Start -->
    <div id="rs-blog" class="rs-blog blog-main-home blog-modify3 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-55 md-mb-40">
                <span class="sub-text sub-text3">
                    <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                    News & Blog
                </span>
                <h2 class="title">
                    Our latest news post<br>
                    and articles
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the construction</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">Best practices construction law on construction</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">Although many people may overlook the need</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">Construction executive holds a very special place</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/5.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">This is another massive sites with a ton of information</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="blog-single.html"><img src="{{asset('assets/images/blog/style1/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-single.html">The construction business the owner site is jam-packed</a></h3>
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                        <div class="blog-button blog-btn3"><a href="blog-single.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Cta Start -->
    <div class="rs-cta bg12 pt-116 pb-116 md-pt-76 md-pb-76" style="background: url(assets/images/bg/cta-bg3.jpg);">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-8">
                    <div class="sec-title md-text-center md-mb-30">
                        <span class="sub-text sub-text3 white-color">
                            <img src="{{asset('assets/images/shape-2.png')}}" alt="Images">
                            Let,s Talk
                        </span>
                        <h2 class="title white-color">
                            Ready for a roof consultation?
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="btn-part text-right md-text-center">
                        <a class="readon more requset-services" href="contact.html">Request A Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

@endsection
