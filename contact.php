<?php include("header.php"); ?>

<!-- ================================
    START CONTACT AREA
================================= -->
<section class="contact-area padding-top-20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">We'd love to hear from you</h3>
                        <p class="font-size-15">Send us a message and we'll respond as soon as possible</p>
                    </div><!-- form-title-wrap -->
                    <div class="form-content ">
                        <div class="contact-form-action">
                            <form class="row messenger-box-form" method="post"
                                action="#">
                                <div class="alert alert-success messenger-box-contact__msg col-lg-12"
                                    style="display: none" role="alert">
                                    Thank You! Your message has been sent.
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="name">Your Name</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Your name" required>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="email">Your Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email" id="email"
                                                placeholder="Email address" required>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-box messenger-box-input-wrap">
                                        <label class="label-text" for="message">Message</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message" id="message"
                                                placeholder="Write message" required></textarea>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <div class="btn-box messenger-box-input-wrap">
                                        <button name="submit" type="submit" class="theme-btn send-message-btn"
                                            id="send-message-btn">Send Message</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Contact Us</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="address-book">
                            <ul class="list-items contact-address">
                                <li>
                                    <i class="la la-map-marker icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Address</h5>
                                    <p class="map__desc">
                                    Gauridhara Street, Kathmandu, Nepal
                                    </p>
                                </li>
                                <li>
                                    <i class="la la-phone icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Phone</h5>
                                    <p class="map__desc">Telephone: 02-145-235698</p>
                                    <p class="map__desc">Mobile: 666 777 888</p>
                                </li>
                                <li>
                                    <i class="la la-envelope-o icon-element"></i>
                                    <h5 class="title font-size-16 pb-1">Email</h5>
                                    <p class="map__desc">info@sastoflights.com</p>
                                </li>
                            </ul>
                            <ul class="social-profile text-center">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="lab la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
    END CONTACT AREA
================================= -->

<!-- ================================
    START MAP AREA
================================= -->
<section class="map-area padding-bottom-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="map-container">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14127.99210714827!2d85.3262667!3d27.7173472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe15a1a3a192a2699!2sRupakot%20International%20Travels%20P%20Ltd!5e0!3m2!1sen!2snp!4v1640542972306!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div><!-- end map-container -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end map-area -->
<!-- ================================
    END MAP AREA
================================= -->

<?php include("footer.php"); ?>