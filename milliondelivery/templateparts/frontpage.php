<?php
/*
Template Name: Home
*/
get_header();
?>


    <!-- Hero Banner -->
     <section class="hero-banner-section section-spacing">
        <div class="container">
            <div class="hero-banner-content">
                <h1>Seamless Service, Right To Your Door.</h1>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="hero-banner-btn">
                    <a href="#" class="common-btn">Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                </div>

                <div class="track-delivery">
                    <div class="track-delivery-content">
                        <div class="track-delivery-title">
                            <h6>Track Your Delivery</h6>
                        </div>
                        <form action="">
                            <div class="track-delivery-input">
                                <input type="text" placeholder="Track Your Order">
                            </div>
                            <div class="track-delivery-btn">
                                <button class="common-btn">Track Your Order <img src="<?php echo get_template_directory_uri(); ?>/assets/images/track-order.svg" alt=""></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section section-spacing">
        <div class="container relative-container">
            <div class="why-choose-grid">
                <!-- Column 1: Text Content -->
                <div class="why-choose-content">
                    <div class="why-choose-title">
                        <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Why Choose Us</span>
                        <h2>Your Trusted Partner in Delivery Excellence</h2>
                    </div>
                    <div class="why-choose-btn">
                        <a href="#" class="common-btn">Contact Us <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                    </div>
                </div>

                <!-- Column 2: Card 1 (High) -->
                <div class="why-choose-card card-1">
                    <div class="icon-box">
                       <!-- Clock Icon -->
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0258E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10"></circle>
                          <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Delivered On Time</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>

                <!-- Column 3: Card 2 (Low) -->
                <div class="why-choose-card card-2">
                    <div class="icon-box">
                        <!-- Truck Icon -->
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0258E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="1" y="3" width="15" height="13"></rect>
                          <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                          <circle cx="5.5" cy="18.5" r="2.5"></circle>
                          <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <h3>Fastest Delivery</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>

                <!-- Column 4: Card 3 (Text aligned/Low) -->
                <div class="why-choose-card card-3">
                    <div class="icon-box">
                        <!-- Money Bag Icon with Dollar -->
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0258E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                          <line x1="12" y1="2" x2="12" y2="7"></line>
                          <path d="M12 11c-1.5 0-3 .5-3 2s1.5 2 3 2 3 .5 3 2-1.5 2-3 2"></path>
                         <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                    <h3>Cost Effective</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Real-Time Tracking Section -->
    <section class="tracking-section section-spacing">
        <div class="container">
            <div class="tracking-header">
                <div class="why-choose-title center-title">
                    <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Real-Time Tracking</span>
                    <h2>Stay Informed Every Step of<br>Your Delivery</h2>
                </div>
            </div>

            <div class="tracking-content">
                <!-- Left Column: Visual (Image + Overlays) -->
                <div class="tracking-visual">
                    <div class="tracking-image">
                       <!-- Placeholder for now, user can replace or I will generate -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/realtime-tracking.jpg" alt="Tracking">
                    </div>
                    
                    <!-- Overlay Form Card -->
                    <div class="tracking-card-overlay">
                        <h4>Create Your Label</h4>
                        <div class="fake-form">
                            <div class="fake-input-group">
                                <label>Leslie Alexander</label>
                                <div class="line"></div>
                            </div>
                            <div class="fake-input-group">
                                <label>2715 Ash Dr. San Jose, South Dakota 83...</label>
                                <div class="line"></div>
                            </div>
                            <div class="fake-input-group">
                                <label>Million Road Freight</label>
                                <div class="line"></div>
                            </div>
                            <div class="fake-row">
                                <div class="fake-col">
                                    <label>TM804</label>
                                    <div class="line"></div>
                                </div>
                                <div class="fake-col">
                                     <label>1</label>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="fake-row">
                                <div class="fake-col">
                                    <label>24</label>
                                    <div class="line"></div>
                                </div>
                                <div class="fake-col">
                                    <label>34.60</label>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="fake-row">
                                <div class="fake-col active-col">
                                    <label>24.89</label>
                                    <div class="blue-line"></div>
                                </div>
                                <div class="fake-col">
                                    <label>Height(in)</label>
                                    <div class="line"></div>
                                </div>
                            </div>
                            
                            <button class="print-label-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/barcode.svg" alt=""> 
                                <!-- Simulating the barcode/icon -->
                                <span>Print Label</span>
                            </button>
                        </div>
                    </div>

                    <!-- Label Printed Toast -->
                    <div class="tracking-toast">
                        <div class="check-circle">
                             <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span>Label Printed</span>
                    </div>
                </div>

                <!-- Right Column: Steps -->
                <div class="tracking-steps">
                    <!-- Step 1 -->
                    <div class="step-item active">
                        <div class="step-number">1.</div>
                        <div class="step-details">
                            <h3>Create Your Label</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                            <a href="#" class="step-link">Contact Us <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-item">
                        <div class="step-number">2.</div>
                        <div class="step-details">
                            <h3>Get Your Tracking Number</h3>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="step-item">
                        <div class="step-number">3.</div>
                        <div class="step-details">
                            <h3>Check The Status</h3>
                        </div>
                    </div>
                    
                    <!-- Mobile Pagination Dots -->
                    <div class="mobile-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="services-section section-spacing">
        <div class="container">
            <!-- Header -->
            <div class="services-header">
                <div class="services-header-left">
                    <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Our Services</span>
                    <h2>Services That Align <br> With Your Needs</h2>
                </div>
                <div class="services-header-right">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="#" class="common-btn request-btn">Request A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/packaging-services.png" alt="Packaging Services">
                    </div>
                    <div class="service-overlay">
                        <span class="service-title">Packaging Services</span>
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/land-transport.jpg" alt="Land Transport">
                    </div>
                    <div class="service-overlay">
                        <span class="service-title">Land Transport</span>
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rail-transport.png" alt="Rail Transport">
                    </div>
                    <div class="service-overlay">
                        <span class="service-title">Rail Transport</span>
                        <div class="service-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Solutions Section -->
    <section class="solutions-section section-spacing">
        <div class="container">
            <div class="center-title">
                <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Quick & Reliable</span>
                <h2>Comprehensive Delivery Solutions</h2>
            </div>

            <div class="solutions-grid">
                <!-- Item 1: Coastal Road (Left) -->
                <div class="sol-item sol-item-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-container-01.png" alt="Coastal Road">
                    <div class="sol-overlay sol-overlay-top-left">
                         <!-- Million Logo Text Mockup -->
                         <div class="logo-mockup">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-logo.svg" alt="Million Deliveries" class="white-logo">
                         </div>
                    </div>
                    <div class="sol-overlay sol-overlay-bottom">
                         <h3>Finding the best routes <br> for your fastest Delivery.</h3>
                    </div>
                </div>

                <!-- Right Side Wrapper -->
                <div class="sol-content-right">
                    <!-- Item 2: Writing (Top) -->
                    <div class="sol-item sol-item-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-container-02.png" alt="Reliable Shipping">
                        <div class="sol-overlay sol-overlay-text">
                            <h3>We help our customers to get <br> reliable shipping services.</h3>
                        </div>
                    </div>

                    <!-- Bottom Row -->
                    <div class="sol-bottom-row">
                        <!-- Item 3: Packing (Left) -->
                        <div class="sol-item sol-item-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-container-03.png" alt="Secure Packing">
                        </div>

                        <!-- Item 4 & 5 Wrapper (Right) -->
                        <div class="sol-item-4-wrapper">
                            <!-- Item 4: Blue Box -->
                            <div class="sol-item sol-item-4 blue-theme">
                                <h3>Effortlessly Ship Your Packages</h3>
                                <a href="#" class="white-btn">Request A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                            </div>

                            <!-- Item 5: Courier -->
                            <div class="sol-item sol-item-5">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-container-04.png" alt="Courier Delivery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <!-- Background Image -->
        <div class="stats-bg">
            <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=1600&auto=format&fit=crop" alt="Warehouse Operations">
        </div>

        <!-- Stats Overlay Grid -->
        <div class="stats-overlay-grid">
            <!-- Box 1: 5M+ (Top Center) -->
            <div class="stat-box stat-box-1">
                <div class="stat-content">
                    <h2>5M <sup>+</sup></h2>
                    <div class="stat-line"></div>
                    <p>Packages delivered annually</p>
                </div>
            </div>

            <!-- Box 2: 20+ (Middle Right) -->
            <div class="stat-box stat-box-2">
                <div class="stat-content">
                    <h2>20 <sup>+</sup></h2>
                    <div class="stat-line"></div>
                    <p>Stations all over Canada</p>
                </div>
            </div>

            <!-- Box 3: 476 (Bottom Center) -->
            <div class="stat-box stat-box-3">
                <div class="stat-content">
                    <h2>476</h2>
                    <div class="stat-line"></div>
                    <p>Tons of goods</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Areas Serviced Section -->
    <section class="areas-serviced section-spacing">
        <div class="container">
            <div class="areas-grid">
                <!-- Left Content -->
                <div class="areas-left">
                    <span class="sub-title white-sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt="" class="white-arrow"> Areas Serviced</span>
                    <h2>Where Is Your Place? We Deliver All Across Canada.</h2>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="#" class="contact-link">Contact Us <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="" class="white-arrow"></a>
                </div>

                <!-- Right Map -->
                <div class="areas-right">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/canada-map.png" alt="Canada Map" class="canada-map">
                </div>

            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="testimonials-section section-spacing">
        <div class="container">
            <div class="testimonials-wrapper">
                <!-- Left Image Side -->
                <div class="testi-image-side">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testomonial-img.png" alt="Happy Customer">
                    
                    <!-- Navigation Buttons -->
                    <div class="testi-nav">
                        <button class="nav-btn prev-btn" aria-label="Previous">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                        </button>
                        <button class="nav-btn next-btn" aria-label="Next">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                        </button>
                    </div>
                </div>
    
                <!-- Right Content Side -->
                <div class="testi-content-side">
                    <div class="testi-content-inner">
                        <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Our Testimonials</span>
                        <h2>What Our Customers Say About Us</h2>
                        
                        <!-- Stars -->
                        <div class="testi-stars">
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                        </div>
    
                        <!-- Quote -->
                        <p class="testi-quote">
                            "I was very pleased with the service. The delivery was fast and the package arrived safely. Highly recommended!"
                        </p>
    
                        <!-- Author -->
                        <div class="testi-author">
                            <h4>John Doe</h4>
                            <span class="testi-date">2 days ago</span>
                        </div>
    
                        <!-- Dots -->
                        <div class="testi-dots">
                            <div class="dot active"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Delivered to Every Place Section -->
    <section class="deliver-everywhere">
        <div class="container relative-container">
            <div class="delivery-content">
                <span class="sub-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-title-arrow.svg" alt=""> Million Deliveries</span>
                <h2>Delivered to Every Place,<br>Wherever You Are.</h2>
                <a href="#" class="contact-btn blue-btn">Contact Us <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" class="white-arrow" alt=""></a>
            </div>
        </div>
    </section>
    <!-- Service Ticker Section -->
    <section class="service-ticker">
        <div class="ticker-wrapper">
            <div class="ticker-track">
                <div class="ticker-item">Land Transportation <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Ocean Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Rail Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                
                <div class="ticker-item">Land Transportation <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Ocean Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Rail Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>

                <div class="ticker-item">Land Transportation <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Ocean Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Rail Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>

                <div class="ticker-item">Land Transportation <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Ocean Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
                <div class="ticker-item">Rail Freight <img src="<?php echo get_template_directory_uri(); ?>/assets/images/demo-logo.svg" alt="M"></div>
            </div>

        </div>
    </section>

    <!-- Footer Section -->
<?php get_footer(); ?>