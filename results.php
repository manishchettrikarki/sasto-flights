<?php include("header.php"); ?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-6">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Search Results</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
        </svg>
    </div><!-- end bread-svg -->
</section>
<!-- ================================
    END BREADCRUMB AREA
================================= -->


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="search-fields-container mt-4">

                <div class="contact-form-action">
                    <form action="#" class="row align-items-center">
                        <div class="col-lg-2 pr-0">
                            <div class="input-box">
                                <label class="label-text">Flying from</label>
                                <div class="form-group">
                                    <span class="la la-map-marker form-icon"></span>
                                    <input class="form-control" type="text" placeholder="City or airport">
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-2">
                            <div class="input-box">
                                <label class="label-text">Flying to</label>
                                <div class="form-group">
                                    <span class="la la-map-marker form-icon"></span>
                                    <input class="form-control" type="text" placeholder="City or airport">
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-2 pr-0">
                            <div class="input-box">
                                <label class="label-text">Departing</label>
                                <div class="form-group">
                                    <span class="la la-calendar form-icon"></span>
                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                </div>
                            </div>
                        </div><!-- end col-lg-3 -->
                        <div class="col-lg-2 pr-0">
                            <div class="input-box">
                                <label class="label-text">Passengers</label>
                                <div class="form-group">
                                    <div class="dropdown dropdown-contain gty-container">
                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span class="adult" data-text="Adult" data-text-multi="Adults">0
                                                Adult</span>
                                            -
                                            <span class="children" data-text="Child" data-text-multi="Children">0
                                                Children</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-wrap">
                                            <div class="dropdown-item">
                                                <div class="qty-box d-flex align-items-center justify-content-between">
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
                                                <div class="qty-box d-flex align-items-center justify-content-between">
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
                                                <div class="qty-box d-flex align-items-center justify-content-between">
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
                        <div class="col-lg-2 pr-0">
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
                        <div class="col-lg-2">
                            <a href="results.php" class="theme-btn w-100 text-center margin-top-20px">Search
                                Again</a>
                        </div>
                    </form>
                </div>


            </div><!-- end main-search-input -->
        </div>
    </div><!-- end row -->
</div>

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                        <div>
                            <h3 class="title font-size-24">24 Flights found</h3>
                            <p class="font-size-14"><span class="mr-1 pt-1">Book with confidence:</span>No flight
                                booking fees</p>
                        </div>
                    </div><!-- end filter-top -->



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
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Beijing</h3>
                                <!-- <p class="card-meta font-size-14">One way flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <button type="button" class="theme-btn theme-btn-small w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View Details
                            </button>
                            <!-- <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a> -->
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img8.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Paris</h3>
                                <!-- <p class="card-meta font-size-14">Round flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$650.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                        <button type="button" class="theme-btn theme-btn-small w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View Details
                            </button>
                            <!-- <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a> -->
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img9.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Dubai</h3>
                                <!-- <p class="card-meta font-size-14">One way flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                        <button type="button" class="theme-btn theme-btn-small w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View Details
                            </button>
                            <!-- <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a> -->
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img10.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Turkey</h3>
                                <!-- <p class="card-meta font-size-14">One way flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                        <button type="button" class="theme-btn theme-btn-small w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View Details
                            </button>
                            <!-- <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a> -->
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img11.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">New york</h3>
                                <!-- <p class="card-meta font-size-14">Round flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$650.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                        <button type="button" class="theme-btn theme-btn-small w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View Details
                            </button>
                            <!-- <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a> -->
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="assets/images/airline-img7.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">London</h3>
                                <!-- <p class="card-meta font-size-14">One way flight</p> -->
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12
                                Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Flights</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
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
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing
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

<!-- Details for flights popup start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:685px;">
        <div class="modal-content container-fluid">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Flight Details
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div id="description" class="page-scroll">
                                    <div class="single-content-item pb-4">
                                        <h3 class="title font-size-26">New York to Paris</h3>
                                        <div class="d-flex align-items-center pt-2">
                                            <p class="mr-2">One way flight</p>
                                            <p>
                                                <span
                                                    class="badge badge-warning text-white font-weight-medium font-size-16">1
                                                    Stop</span>
                                            </p>
                                        </div>
                                    </div><!-- end single-content-item -->
                                    <div class="section-block"></div>
                                    <div class="single-content-item py-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="single-feature-titles text-center mb-3">
                                                    <h3 class="title font-size-15 font-weight-medium">Flight Take off
                                                    </h3>
                                                    <span class="font-size-13">12 Jun 2020, 7:50 am</span>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="single-feature-titles text-center mb-3">
                                                    <h3 class="title font-size-15 font-weight-medium">Overlay time
                                                    </h3>
                                                    <!-- <i class="la la-clock-o text-color font-size-22"></i> -->
                                                    <span class="font-size-13 mt-n2">1H 40M</span>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="single-feature-titles text-center mb-3">
                                                    <h3 class="title font-size-15 font-weight-medium">Flight Landing
                                                    </h3>
                                                    <span class="font-size-13">13 Jun 2020, 5:50 am</span>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12">
                                                <div
                                                    class="single-feature-titles text-center border-top border-bottom py-3 mb-4">
                                                    <h3 class="title font-size-15 font-weight-medium">Total flight
                                                        time:<span class="font-size-13 d-inline-block ml-1 text-gray">13
                                                            Hours 40 min</span></h3>
                                                </div>
                                            </div><!-- end col-lg-12 -->

                                        </div><!-- end row -->
                                    </div><!-- end single-content-item -->
                                </div><!-- end description -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Fare Breakdown
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
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
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Fare Rules
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <div class="single-content-item padding-bottom-40px">
                                <h3 class="title font-size-20">Fare Rules for your Flight</h3>
                                
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingFour">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="true" aria-controls="faqCollapseFour">
                                                    <span class="ml-3">Flight cancellation charges</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseFour" class="collapse show" aria-labelledby="faqHeadingFour" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingFive">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                                    <span class="ml-3">WAmendment in higher class charges</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingSix">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                                    <span class="ml-3">Amendment in same class charges</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="faqHeadingSeven">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                                                    <span class="ml-3">Rebooking/cancellation charges</span>
                                                    <i class="la la-minus"></i>
                                                    <i class="la la-plus"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="faqCollapseSeven" class="collapse" aria-labelledby="faqHeadingSeven" data-parent="#accordionExample2">
                                            <div class="card-body d-flex">
                                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                            </div><!-- end single-content-item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="booking.php" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Details for flights popup ends -->
<!-- Flight details tab -->


<?php include("footer.php"); ?>