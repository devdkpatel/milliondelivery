    <footer class="main-footer">
        <div class="container">
            <div class="d-flex footer-wrapper">
                <!-- Left Side (Black) -->
                <div class="footer-left">
                    <div class="footer-links-grid">
                        <!-- Column 1 -->
                        <div class="footer-col">
                            <h4>Quick Link</h4>
                            <ul>
                                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'quick-menu',
                                'container' => false,
                                'items_wrap' => '%3$s'
                            )
                        );
                        ?>
                            </ul>
                        </div>
                        <!-- Column 2 -->
                        <div class="footer-col">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">Packaging Services</a></li>
                                <li><a href="#">Land Transportation</a></li>
                                <li><a href="#">Rail Freight</a></li>
                                <li><a href="#">Ocean Freight</a></li>
                            </ul>
                        </div>
                        <!-- Column 3 -->
                        <div class="footer-col">
                            <h4>Legal</h4>
                            <ul>
                               <li><a href="#">Privacy Policy</a></li>
                               <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="footer-bottom">
                         <p>Copyright © 2024 <span class="white-text">Million Delivery</span> All rights reserved.</p>
                         <div class="footer-socials">
                             <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"></a> 
                             <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"></a>
                             <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="LinkedIn"></a>
                         </div>
                    </div>
                </div>
        
                <!-- Right Side (Blue) -->
                <div class="footer-right">
                    <div class="newsletter-box">
                        <span class="tiny-label">Stay In Touch</span>
                        <h3>Subscribe To Our<br>Newsletter</h3>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Enter Your Email">
                            <button type="submit">Submit <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></button>
                        </form>
                    </div>
        
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <div class="contact-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="Phone"></div>
                            <div class="contact-text">
                                <span class="label">Give us a call</span>
                                <a href="tel:+18886454661" class="value">+1 (888) 645 4661</a>
                            </div>
                        </div>
                        <div class="contact-item">
                             <div class="contact-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" alt="Email"></div>
                            <div class="contact-text">
                                <span class="label">Send us an email</span>
                                <a href="mailto:info@milliondeliveries.com" class="value">info@milliondeliveries.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>