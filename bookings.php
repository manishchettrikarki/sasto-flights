<?php include("header.php"); ?>
<!-- ================================
    START BOOKING AREA
================================= -->
<section class="booking-area padding-top-100px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <table class="table table-res">
                    <tbody>
                        <tr>
                            <th class="table-decoration" scope="col">First Name</th>
                            <th scope="col">John</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">Last Name</th>
                            <th scope="col">Doe</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">Email</th>
                            <th scope="col">john@doe.com</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">Contact</th>
                            <th scope="col">9856325569</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <table class="table table-res">
                    <tbody>
                        <tr>
                            <th class="table-decoration" scope="col">Address</th>
                            <th scope="col">Kathmandu</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">County Name</th>
                            <th scope="col">Nepal</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">Country Code</th>
                            <th scope="col">+977</th>
                        </tr>

                        <tr>
                            <th class="table-decoration" scope="col">Passposrt Number</th>
                            <th scope="col">4125235698569</th>
                        </tr>
                        <tr>
                            <th class="table-decoration" scope="col">Passposrt Expiry </th>
                            <th scope="col">2025/10/12</th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="booking-area padding-top-100px padding-bottom-70px">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Select Your Payment Method</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="section-tab check-mark-tab text-center pb-4">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="credit-card-tab" data-bs-toggle="tab"
                                        href="#credit-card" role="tab" aria-controls="credit-card"
                                        aria-selected="false">
                                        <i class="la la-check icon-element"></i>
                                        <img src="assets/images/esewa.jpg" alt="" width="100px" height="100px">
                                        <span class="d-block pt-2">Payment with Esewa</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="paypal-tab" data-bs-toggle="tab" href="#paypal" role="tab"
                                        aria-controls="paypal" aria-selected="true">
                                        <i class="la la-check icon-element"></i>
                                        <img src="assets/images/ips.png" alt="" width="100px" height="100px">
                                        <span class="d-block pt-2">Payment with ConnectIPS</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="payoneer-tab" data-bs-toggle="tab" href="#payoneer"
                                        role="tab" aria-controls="payoneer" aria-selected="true">
                                        <i class="la la-check icon-element"></i>
                                        <img src="assets/images/global.png" alt="" width="100px" height="100px">
                                        <span class="d-block pt-2">Payment with Global IME</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="credit-card" role="tabpanel"
                                aria-labelledby="credit-card-tab">
                                <div class="contact-form-action">
                                    <table class="table table-bordered border-primary">
                                        <thead>
                                            <tr style="background-color: #0B87C7; color:white;">
                                                <th scope="col">Base Fare</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Sub Total</th>
                                                <th scope="col">Service Charge</th>
                                                <th scope="col">Total Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">$500</th>
                                                <td>$150</td>
                                                <td>$650</td>
                                                <td>$10</td>
                                                <td>$660</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end contact-form-action -->
                            </div><!-- end tab-pane-->
                            <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                <div class="contact-form-action">
                                    <table class="table table-bordered border-primary">
                                        <thead>
                                            <tr style="background-color: #0B87C7; color:white;">
                                                <th scope="col">Base Fare</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Sub Total</th>
                                                <th scope="col">Service Charge</th>
                                                <th scope="col">Total Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">$500</th>
                                                <td>$150</td>
                                                <td>$650</td>
                                                <td>$10</td>
                                                <td>$660</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end contact-form-action -->
                            </div><!-- end tab-pane-->
                            <div class="tab-pane fade" id="payoneer" role="tabpanel" aria-labelledby="payoneer-tab">
                                <div class="contact-form-action">
                                    <table class="table table-bordered border-primary">
                                        <thead>
                                            <tr style="background-color: #0B87C7; color:white;">
                                                <th scope="col">Base Fare</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Sub Total</th>
                                                <th scope="col">Service Charge</th>
                                                <th scope="col">Total Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">$500</th>
                                                <td>$150</td>
                                                <td>$650</td>
                                                <td>$10</td>
                                                <td>$660</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end contact-form-action -->
                            </div><!-- end tab-pane-->
                        </div><!-- end tab-content -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-8 -->

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="btn-box">
                    <a href="booking.php" class="theme-btn margin-right-20px" type="submit">Edit Details</button>
                        <a href="success.php" class="theme-btn" type="submit">Continue to Payment</button>
                </div>
            </div><!-- end col-lg-12 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end booking-area -->
<!-- ================================
    END BOOKING AREA
================================= -->
<?php include("footer.php"); ?>