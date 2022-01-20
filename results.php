<?php include("header.php"); ?>
<!-- GIF AD Container Start -->
<div class="container">
    <div class="row">
        <img src="assets/images/connect-ips.gif">
    </div>
</div>
<!-- GIF AD Container Ends -->


<div class="container">
    <div class="row search-result-top">
        <!-- Date on the left -->
        <div class="col-md-3 col-lg-3 col-4 col-sm-4">
            <h3 class="font-size-17 padding-top-10px card-title">
                <a href="#" class="theme-btn w-60 text-center">
                    <i class="la la-angle-double-left"></i>
                    Dec 3, 2021
                </a><br>
                <a class="modify-search font-size-18" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p id="headingOne" class="padding-top-10px">
                        <i class="la la-search-plus"></i>
                        Modify Search
                    </p>
                </a>
            </h3>
        </div>
        <!-- Flight detail on the center -->
        <div class="col-md-6 col-lg-6 col-4 col-sm-4">
            <!-- <h2 class="text-center padding-top-10px font-size-20 font-weight-bold red">One Way Flight</h2> -->
            <div class="row">
                <div class="col-md-4 col-sm-12 col-lg-4 text-res">
                    <h3 class="font-size-17 padding-top-10px card-title text-center font-weight-bold">Kathmandu</h3>
                    <h3 class="font-size-15 font-weight-medium mb-0 text-center">
                        <span class="flex-shirnk-0 mr-2 take-off">
                            <i class="la la-plane"></i>Take off</h3>
                    </span>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4">
                    <h3 class=" text-center font-size-17 padding-top-10px card-title font-weight-bold">Passenger</h3>
                    <h3 class="font-size-15 text-center font-weight-medium mb-0">
                        <span class="flex-shirnk-0 mr-2">
                            <i class="la la-user"></i>1 ADT, 2 CHILD</h3>
                    </span>
                </div>

                <div class="col-md-4 col-sm-12 col-lg-4">
                    <h3 class="text-center font-size-17 padding-top-10px card-title font-weight-bold">Abhu Dhabi</h3>
                    <h3 class="font-size-15 text-center font-weight-medium mb-0">
                        <span class="flex-shirnk-0 mr-2 landing">
                            <i class="la la-plane"></i>Landing</h3>
                    </span>
                </div>
            </div>
        </div>
        <!-- Date on Right -->
        <div class="col-md-3 col-lg-3 col-4 col-sm-4">
            <div class="shift-right">
                <h3 class="font-size-17 padding-top-10px card-title">
                    <a href="#" class="theme-btn w-60 text-center">
                        Dec 5, 2021
                        <i class="la la-angle-double-right"></i>
                    </a></br>
                    <a class="modify-search font-size-18" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p id="headingOne" class="padding-top-10px">
                            <i class="la la-bars"></i>
                            Filters
                        </p>
                    </a>
                </h3>
            </div>
        </div>

    </div>
</div>


<!-- ================================
    Modify Search Expand Content
================================= -->
<div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-fields-container mt-4">
                        <div class="contact-form-action">
                            <form action="#" class="row align-items-center">
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Flying from</label>
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input class="form-control" type="text" placeholder="City or airport">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                    <div class="input-box">
                                        <label class="label-text">Flying to</label>
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input class="form-control" type="text" placeholder="City or airport">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Departing</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single"
                                                readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Passengers</label>
                                        <div class="form-group">
                                            <div class="dropdown dropdown-contain gty-container">
                                                <a class="dropdown-toggle dropdown-btn" href="#" role="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="adult" data-text="Adult" data-text-multi="Adults">0
                                                        Adult</span>
                                                    -
                                                    <span class="children" data-text="Child"
                                                        data-text-multi="Children">0
                                                        Children</span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Adults</label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i>
                                                                </div>
                                                                <input type="text" name="adult_number" value="0">
                                                                <div class="qtyInc"><i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Children</label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i>
                                                                </div>
                                                                <input type="text" name="child_number" value="0">
                                                                <div class="qtyInc"><i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Infants</label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i>
                                                                </div>
                                                                <input type="text" name="infants_number" value="0"
                                                                    class="qty-input">
                                                                <div class="qtyInc"><i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pr-0">
                                    <div class="input-box">
                                        <label class="label-text">Coach</label>
                                        <div class="form-group select-contain select-contain-shadow w-auto">
                                            <select class="form-select" aria-label="Selct your Economy">
                                                <option select value="1" selected>Economy</option>
                                                <option value="2">Business</option>
                                                <option value="3">First class</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                    <a href="results.php" class="theme-btn w-100 text-center margin-top-20px">Search
                                        Again</a>
                                </div>
                            </form>
                        </div>
                    </div><!-- end main-search-input -->
                </div>
            </div><!-- end row -->
        </div>
    </div>
</div>

<!-- ================================
    Modify Search Expand Content End
================================= -->

<!-- ================================
    Filter Expand Content
================================= -->
<div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
        <div class="row">
            <div class=" container col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-bar d-flex align-items-center justify-content-between">
                        <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                            <div class="filter-option">
                                <h3 class="title font-size-16">Filter by:</h3>
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button"
                                        data-toggle="dropdown">
                                        Filter Price
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="slider-range-wrap">
                                                <div class="price-slider-amount padding-bottom-20px">
                                                    <label for="amount" class="filter__label">Price:</label>
                                                    <input type="text" id="amount" class="amounts">
                                                </div><!-- end price-slider-amount -->
                                                <div id="slider-range"></div><!-- end slider-range -->
                                            </div><!-- end slider-range-wrap -->
                                            <div class="btn-box pt-4">
                                                <button class="theme-btn theme-btn-small theme-btn-transparent"
                                                    type="button">Apply</button>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button"
                                        data-toggle="dropdown">
                                        Review Score
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r1">
                                                    <label for="r1">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r2">
                                                    <label for="r2">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r3">
                                                    <label for="r3">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r4">
                                                    <label for="r4">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r5">
                                                    <label for="r5">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button"
                                        data-toggle="dropdown">
                                        Airlines
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb1">
                                                    <label for="catChb1">Major Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb2">
                                                    <label for="catChb2">United Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb3">
                                                    <label for="catChb3">Delta Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb4">
                                                    <label for="catChb4">Alitalia</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb5">
                                                    <label for="catChb5">US Airways</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb6">
                                                    <label for="catChb6">Air France</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb7">
                                                    <label for="catChb7">Air Tahiti Nui</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb8">
                                                    <label for="catChb8">Indigo</label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                        </div><!-- end filter-bar-filter -->
                        <div class="select-contain">
                            <select class="form-select">
                                <option value="1">Short by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div><!-- end select-contain -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div>
</div>
<!-- ================================
    Filter Expand Content End
================================= -->

<!-- ================================
    Search result Grid
================================= -->
<section class="card-area">
    <div class="container padding-top-10px">
        <div class="row">
            <!-- Left side search result grid -->
            <div class="col-md-9 col-lg-9 col-sm-12 col-12">
                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->

                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->

                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->

                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->

                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->

                <div class="row card-item flight--card">
                    <div class="col-md-2 col-sm-12 col-12 flight-image-none">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Kathmandu</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 take-off">
                                <i class="la la-plane"></i>Take off</h3>
                        </span>
                        <p class="font-size-14 card-meta">Wed Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-title">Refundable</p>
                    </div>

                    <div class="col-md-3 col-sm-4 col-4 light-details">
                        <p class="font-size-14 text-center padding-bottom-15px"><i
                                class="la la-clock clock"></i><br><span class="color-text-2 mr-1"></span> 12 Hours
                            30 Minutes</p>
                        <p class="font-size-17 card-title text-center"><img src="assets/images/shopping-bag.png"
                                alt="Hand Carry" width="18px" height="18px"> 7kg
                            <i class="la la-luggage-cart red"></i> 30Kg</p>
                    </div>

                    <div class="col-md-2 col-sm-4 col-4 card-top-title justify-content-between">
                        <h3 class="font-size-17 padding-top-10px card-title">Abhu Dhabi</h3>
                        <h3 class="font-size-15 font-weight-medium mb-0">
                            <span class="flex-shirnk-0 mr-2 landing">
                                <i class="la la-plane"></i>Landing</h3>
                        </span>
                        <p class="font-size-14 card-meta">Thu Nov 12 6:50 AM</p>
                        <p class="font-size-14 card-meta card-title">1 Stop</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="font-size-120 font-weight-bold card-title text-center">USD 550/per</h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a class="btn-primary w-50 margin-bottom-10px" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Details
                            </a>
                        </h2>
                        <h2 class="accordion-header" id="headingThree">
                            <a href="booking.php" class="btn-primary w-50 margin-bottom-10px">Book Now</a>
                        </h2>
                    </div>

                    <!-- Flight Details -->
                    <div id="collapseThree" class="accordion-collapse collapse background full-width"
                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <h3 class="title font-size-26 padding-top-10px">Kathmandu To Abhu Dhabi
                        </h3>
                        <div class="accordion-body">
                            <nav class="full-width">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Flight Details</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Fare Breakdown</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Fare Rules</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div id="description" class="page-scroll">

                                        <div class="section-block"></div>
                                        <div class="single-content-item py-4">
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3 padding-bottom-20px">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Duration
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>

                                                    </div>
                                                </div><!-- end col-lg-4 -->


                                            </div><!-- end row -->
                                            <div class="col-lg-12 white">
                                                <div class="single-feature-titles text-center">
                                                    <h3
                                                        class="title font-size-15 font-weight-medium text-white btn btn-danger w-100">
                                                        Flight Overlay time: <span
                                                            class="font-size-15 d-inline-block ml-1 text-white">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="row padding-top-10px">
                                                <div class="col-lg-3 col-sm-3">
                                                    <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Take off</h3>
                                                        <span class="font-size-13">12 Jun 2020</span>
                                                        <span class="font-size-25">7:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Overlay
                                                            time
                                                        </h3>
                                                        <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                        <span class="font-size-20 mt-n2">1H 40M</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-3 col-sm-3">
                                                    <div class="single-feature-titles text-center mb-3">
                                                        <h3 class="title font-size-15 font-weight-medium">Flight
                                                            Landing
                                                        </h3>
                                                        <span class="font-size-13">13 Jun 2020</span>
                                                        <span class="font-size-25">5:50 am</span>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                            </div>
                                        </div><!-- end single-content-item -->
                                    </div><!-- end description -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type</th>
                                                <th scope="col">Base Fare (Per Person)</th>
                                                <th scope="col">Tax</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT*1</th>
                                                <td>NRP 38220*1</td>
                                                <td>NRP 17237*1</td>
                                                <td>NRP 55457</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3"><strong>Total Fare</strong>
                                                </td>
                                                <td><strong>NRP 110914</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->
            </div>
            <!-- Left Side search grid result end -->


            <div class="col-md-3 col-lg-3 ad-img-res">
                <ul class="shadow-background">
                    <li class="padding-bottom-10px">
                        <img class="img-fluid" src="assets/images/banner-1.jpg" alt="">
                    </li>
                    <li class="padding-bottom-10px">
                        <img class="img-fluid" src="assets/images/banner-1.jpg" alt="">
                    </li>


                </ul>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-phone"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Need Help? Contact us</h4>
                        <p class="info__desc font-weight-bold">
                            +977-01-234734
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Payments</h4>
                        <p class="info__desc">
                            You can make online payment through your online banking or any other wallet application
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-times"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Cancel Policy</h4>
                        <p class="info__desc">
                            We provide cancle policy on refundable flight according to the flight rules
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->


<?php include("footer.php"); ?>