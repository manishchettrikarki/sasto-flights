<?php include("header.php"); ?>
<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper6">
    <div class="hero-box hero-bg-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="section-heading">
                            <h2 class="sec__title cd-headline slide d-flex align-items-center">
                                It's the Time to <br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible"> discover</b>
                                    <b> fly far</b>
                                    <b>explore</b>
                                    <b> travel</b>
                                    <b> meet</b>
                                    <b> have fun</b>
                                    <b> run away</b>
                                    <b> rejuvenate</b>
                                    <b> live</b>
                                    <b> relax</b>
                                    <b> enjoy life</b>
                                </span>
                            </h2>
                        </div>
                    </div><!-- end hero-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-fields-container mt-4">
                        <div class="section-tab section-tab-2 pb-3">
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="one-way-tab" data-bs-toggle="tab" href="#one-way"
                                        role="tab" aria-controls="one-way" aria-selected="true">
                                        One way
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="round-trip-tab" data-bs-toggle="tab" href="#round-trip"
                                        role="tab" aria-controls="round-trip" aria-selected="false">
                                        Round-trip
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="multi-city-tab" data-bs-toggle="tab" href="#multi-city"
                                        role="tab" aria-controls="multi-city" aria-selected="false">
                                        Multi-city
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content" id="myTabContent3">
                            <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                aria-labelledby="one-way-tab">
                                <div class="contact-form-action">
                                    <form action="#" class="row align-items-center">
                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Flying from</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Flying to</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Departing</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Passengers</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <span class="adult" data-text="Adult"
                                                                data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child"
                                                                data-text-multi="Children">0 Children</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="adult_number"
                                                                            value="0">
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
                                                                        <input type="text" name="child_number"
                                                                            value="0">
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
                                                                        <input type="text" name="infants_number"
                                                                            value="0" class="qty-input">
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
                                        <div class="col-lg-3 pr-0">
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
                                        <div class="col-lg-3">
                                            <a href="results.php"
                                                class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
                                <div class="contact-form-action">
                                    <form action="#" class="row align-items-center">
                                        <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Flying from</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Flying to</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Departing - Returning</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Passengers</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#" role="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <span class="adult" data-text="Adult"
                                                                data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child"
                                                                data-text-multi="Children">0 Children</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec"><i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="adult_number"
                                                                            value="0">
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
                                                                        <input type="text" name="child_number"
                                                                            value="0">
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
                                                                        <input type="text" name="infants_number"
                                                                            value="0" class="qty-input">
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
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Coach</label>
                                                <div class="form-group">
                                                    <div class="select-contain select-contain-shadow w-auto">
                                                        <select class="form-select">
                                                            <option selected value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <a href="flight-search-result.html"
                                                class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="advanced-wrap">
                                    <a class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                        data-bs-toggle="collapse" href="#collapseThree" role="button"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Advanced options <i class="la la-angle-down ml-1"></i>
                                    </a>
                                    <div class="collapse pt-3" id="collapseThree">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Preferred airline</label>
                                                    <div class="form-group">
                                                        <div class="select-contain select-contain-shadow w-100">
                                                            <select class="form-select">
                                                                <option selected="selected" value=""> No preference
                                                                </option>
                                                                <option value="AN">Advanced Air</option>
                                                                <option value="A3">Aegean</option>
                                                                <option value="EI">Aer Lingus</option>
                                                                <option value="5G">Aerocuahonte / Mayair</option>
                                                                <option value="SU">Aeroflot-Russian Airlines</option>
                                                                <option value="AR">Aerolineas Argentinas</option>
                                                                <option value="VW">Aeromar Airlines</option>
                                                                <option value="AM">Aeromexico</option>
                                                                <option value="ZI">Aigle Azur</option>
                                                                <option value="AH">Air Algerie</option>
                                                                <option value="KC">Air Astana</option>
                                                                <option value="UU">Air Austral</option>
                                                                <option value="BT">Air Baltic</option>
                                                                <option value="BP">Air Botswana</option>
                                                                <option value="AC">Air Canada</option>
                                                                <option value="TX">Air Caraibes</option>
                                                                <option value="CA">Air China</option>
                                                                <option value="3E">Air Choice One</option>
                                                                <option value="XK">Air Corsica</option>
                                                                <option value="UX">Air Europa</option>
                                                                <option value="X4">Air Excursions LLC</option>
                                                                <option value="AF">Air France</option>
                                                                <option value="NY">Air Iceland Connect</option>
                                                                <option value="AI">Air India</option>
                                                                <option value="IG">Air Italy</option>
                                                                <option value="MD">Air Madagascar</option>
                                                                <option value="KM">Air Malta</option>
                                                                <option value="MK">Air Mauritius</option>
                                                                <option value="9U">Air Moldova</option>
                                                                <option value="NZ">Air New Zealand</option>
                                                                <option value="PX">Air Niugini</option>
                                                                <option value="OG">Air Onix</option>
                                                                <option value="JU">Air Serbia</option>
                                                                <option value="TN">Air Tahiti Nui</option>
                                                                <option value="TS">Air Transat</option>
                                                                <option value="H/">AirAsia with baggage</option>
                                                                <option value="AS">Alaska Airlines</option>
                                                                <option value="AZ">Alitalia</option>
                                                                <option value="NH">All Nippon Airways</option>
                                                                <option value="G4">Allegiant Air</option>
                                                                <option value="AA">American Airlines</option>
                                                                <option value="OY">Andes Lineas Aereas</option>
                                                                <option value="OZ">Asiana Airlines</option>
                                                                <option value="KP">ASKY</option>
                                                                <option value="OS">Austrian Airlines</option>
                                                                <option value="AV">Avianca</option>
                                                                <option value="2K">Avianca Ecuador</option>
                                                                <option value="9V">Avior Airlines</option>
                                                                <option value="J2">Azerbaijan Airlines</option>
                                                                <option value="AD">Azul</option>
                                                                <option value="JD">Beijing Capital Airlines</option>
                                                                <option value="0B">BlueAir</option>
                                                                <option value="OB">Boliviana De Aviacion</option>
                                                                <option value="4B">Boutique Air</option>
                                                                <option value="BA">British Airways</option>
                                                                <option value="SN">Brussels Airlines</option>
                                                                <option value="A7">Calafia Airlines</option>
                                                                <option value="K6">Cambodia Angkor Air</option>
                                                                <option value="BW">Caribbean Airlines</option>
                                                                <option value="CX">Cathay Pacific</option>
                                                                <option value="KX">Cayman Airways</option>
                                                                <option value="CI">China Airlines</option>
                                                                <option value="MU">China Eastern Airlines</option>
                                                                <option value="CZ">China Southern Airlines</option>
                                                                <option value="CC">CM Airlines</option>
                                                                <option value="DE">Condor</option>
                                                                <option value="LF">Contour Airlines</option>
                                                                <option value="CM">Copa</option>
                                                                <option value="SS">Corsair</option>
                                                                <option value="OK">Czech Airlines</option>
                                                                <option value="DL">Delta</option>
                                                                <option value="KG">Denver Air Connection</option>
                                                                <option value="U2">easyJet</option>
                                                                <option value="MS">Egyptair</option>
                                                                <option value="LY">EL AL Israel Airlines</option>
                                                                <option value="7Q">Elite Airways</option>
                                                                <option value="EL">Ellinair</option>
                                                                <option value="EK">Emirates</option>
                                                                <option value="ET">Ethiopian Airlines</option>
                                                                <option value="EY">Etihad Airways</option>
                                                                <option value="EW">Eurowings</option>
                                                                <option value="BR">EVA Airways</option>
                                                                <option value="FJ">Fiji Airways</option>
                                                                <option value="AY">Finnair</option>
                                                                <option value="FY">Firefly</option>
                                                                <option value="F8">Flair Airlines</option>
                                                                <option value="BE">Flybe</option>
                                                                <option value="FZ">flydubai</option>
                                                                <option value="XY">flynas</option>
                                                                <option value="F9">Frontier Airlines</option>
                                                                <option value="GA">Garuda Indonesia</option>
                                                                <option value="GM">Germania Flug AG</option>
                                                                <option value="4U">Germanwings</option>
                                                                <option value="G3">GOL Linhas Aereas S.A.</option>
                                                                <option value="ZK">Great Lakes Airlines</option>
                                                                <option value="GF">Gulf Air</option>
                                                                <option value="HU">Hainan Airlines</option>
                                                                <option value="HA">Hawaiian Airlines</option>
                                                                <option value="HX">Hong Kong Airlines</option>
                                                                <option value="IB">Iberia</option>
                                                                <option value="FI">Icelandair</option>
                                                                <option value="JY">interCaribbean Airways</option>
                                                                <option value="4O">Interjet</option>
                                                                <option value="03">Involatus</option>
                                                                <option value="JL">Japan Airlines</option>
                                                                <option value="9W">Jet Airways</option>
                                                                <option value="B6">JetBlue Airways</option>
                                                                <option value="DV">JSC Aircompany SCAT</option>
                                                                <option value="KQ">Kenya Airways</option>
                                                                <option value="KL">KLM</option>
                                                                <option value="KE">Korean Air</option>
                                                                <option value="B0">La Compagnie</option>
                                                                <option value="LR">LACSA</option>
                                                                <option value="QV">Lao Airlines</option>
                                                                <option value="LP">LATAM Airlines Group</option>
                                                                <option value="LA">LATAM Airlines Group</option>
                                                                <option value="JJ">LATAM Airlines Group</option>
                                                                <option value="XL">LATAM Airlines Group</option>
                                                                <option value="4M">LATAM Airlines Group</option>
                                                                <option value="W4">LC Peru</option>
                                                                <option value="LI">Liat</option>
                                                                <option value="LO">LOT-Polish Airlines</option>
                                                                <option value="LH">Lufthansa</option>
                                                                <option value="LG">Luxair</option>
                                                                <option value="MH">Malaysia Airlines</option>
                                                                <option value="OD">Malindo Air</option>
                                                                <option value="2M">Maya Island Air</option>
                                                                <option value="7M">Mayair</option>
                                                                <option value="OM">MIAT-Mongolian Airlines</option>
                                                                <option value="ME">Middle East Airlines</option>
                                                                <option value="YM">Montenegro</option>
                                                                <option value="8M">Myanmar Airways International
                                                                </option>
                                                                <option value="NO">Neos S.P.A.</option>
                                                                <option value="RA">Nepal Airlines</option>
                                                                <option value="NP">Nile Air</option>
                                                                <option value="W/">NokScoot with baggage</option>
                                                                <option value="DN">Norwegian Air Argentina</option>
                                                                <option value="D8">Norwegian Air International Ltd
                                                                </option>
                                                                <option value="DY">Norwegian Air Shuttle</option>
                                                                <option value="DI">Norwegian Air UK</option>
                                                                <option value="Y/">Olympic Air with baggage</option>
                                                                <option value="WY">Oman Air</option>
                                                                <option value="8Q">Onur Air</option>
                                                                <option value="8P">Pacific Coastal Airlines</option>
                                                                <option value="PK">Pakistan International Airlines
                                                                </option>
                                                                <option value="ZM">Pegasus Asia</option>
                                                                <option value="KS">PenAir</option>
                                                                <option value="PR">Philippine Airlines</option>
                                                                <option value="PU">Plus Ultra Lineas Aereas S. A.
                                                                </option>
                                                                <option value="PD">Porter Airlines</option>
                                                                <option value="PW">PrecisionAir</option>
                                                                <option value="P0">Proflight Zambia</option>
                                                                <option value="QF">Qantas Airways</option>
                                                                <option value="QR">Qatar Airways</option>
                                                                <option value="7H">Ravn Alaska</option>
                                                                <option value="WZ">Red Wings Airlines</option>
                                                                <option value="4P">Regional Sky</option>
                                                                <option value="AT">Royal Air Maroc</option>
                                                                <option value="BI">Royal Brunei Airlines</option>
                                                                <option value="RJ">Royal Jordanian</option>
                                                                <option value="WB">Rwandair</option>
                                                                <option value="SK">SAS</option>
                                                                <option value="S4">SATA International-Azores Airlines
                                                                    S.A.</option>
                                                                <option value="SV">Saudi Arabian Airlines</option>
                                                                <option value="/Y">Scoot with baggage</option>
                                                                <option value="BB">Seaborne Airlines</option>
                                                                <option value="SC">Shandong Airlines</option>
                                                                <option value="3U">Sichuan Airlines</option>
                                                                <option value="3M">Silver Airways</option>
                                                                <option value="SQ">Singapore Airlines</option>
                                                                <option value="H2">Sky Airlines</option>
                                                                <option value="GQ">Sky Express</option>
                                                                <option value="IE">Solomon Airlines</option>
                                                                <option value="SA">South African Airways</option>
                                                                <option value="9X">Southern Airways</option>
                                                                <option value="NK">Spirit Airlines</option>
                                                                <option value="UL">SriLankan Airlines</option>
                                                                <option value="2I">STAR PERU</option>
                                                                <option value="6G">Sun Air Express</option>
                                                                <option value="SY">Sun Country Airlines</option>
                                                                <option value="PY">Surinam Airways</option>
                                                                <option value="LX">Swiss International Air Lines
                                                                </option>
                                                                <option value="WO">Swoop</option>
                                                                <option value="DT">TAAG Angola Airlines</option>
                                                                <option value="TA">TACA Airlines</option>
                                                                <option value="VR">TACV-Cabo Verde Airlines</option>
                                                                <option value="5U">TAG Airlines</option>
                                                                <option value="EQ">Tame</option>
                                                                <option value="TP">TAP Portugal</option>
                                                                <option value="RO">Tarom-Romanian Air Transport</option>
                                                                <option value="TG">Thai Airways International</option>
                                                                <option value="MT">Thomas Cook Airlines</option>
                                                                <option value="/X">Tigerair Australia with Bag</option>
                                                                <option value="IT">Tigerair Taiwan</option>
                                                                <option value="/Z">Tigerair Taiwan with bag</option>
                                                                <option value="TJ">Tradewind Aviation</option>
                                                                <option value="9N">Tropic Air</option>
                                                                <option value="TB">TUI fly</option>
                                                                <option value="TK">Turkish Airlines</option>
                                                                <option value="PS">Ukraine International Airlines
                                                                </option>
                                                                <option value="UA">United</option>
                                                                <option value="UT">Utair Aviation</option>
                                                                <option value="HY">Uzbekistan Airways</option>
                                                                <option value="VN">Vietnam Airlines</option>
                                                                <option value="VX">Virgin America</option>
                                                                <option value="VS">Virgin Atlantic</option>
                                                                <option value="VA">Virgin Australia</option>
                                                                <option value="V2">Vision Airlines</option>
                                                                <option value="VB">Viva Aerobus</option>
                                                                <option value="F1">Viva Air Colombia</option>
                                                                <option value="VV">Viva Airlines Peru</option>
                                                                <option value="Y4">Volaris</option>
                                                                <option value="V7">Volotea</option>
                                                                <option value="VY">Vueling Airlines</option>
                                                                <option value="WS">WestJet</option>
                                                                <option value="WM">Windward Island Airways International
                                                                </option>
                                                                <option value="MF">Xiamen Airlines</option>
                                                                <option value="SE">XL Airways</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end advanced-wrap -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                aria-labelledby="multi-city-tab">
                                <div class="contact-form-action multi-flight-field d-flex align-items-center">
                                    <form action="#" class="row flex-grow-1 align-items-center">
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Flying from</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Flying to</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="City or airport">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-4">
                                            <div class="input-box">
                                                <label class="label-text">Departing</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control date-multi-picker" type="text"
                                                        name="daterange-single">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </form>
                                    <div class="multi-flight-delete-wrap pt-3 pl-3">
                                        <button class="multi-flight-remove" type="button"><i
                                                class="la la-remove"></i></button>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-3 pr-0">
                                        <div class="form-group">
                                            <button class="theme-btn add-flight-btn margin-top-40px w-100"
                                                type="button"><i class="la la-plus mr-1"></i>Add another flight</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 pr-0">
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
                                                            data-text-multi="Children">0 Children</span>
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
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
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
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
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
                                                                    <div class="qtyInc"><i class="la la-plus"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Coach</label>
                                            <div class="form-group">
                                                <div class="select-contain select-contain-shadow w-auto">
                                                    <select class="form-select">
                                                        <option value="1" selected>Economy</option>
                                                        <option value="2">Business</option>
                                                        <option value="3">First class</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <a href="flight-search-result.html"
                                            class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                                    </div>
                                </div>
                            </div><!-- end tab-pane -->
                        </div>
                    </div><!-- end main-search-input -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <!-- <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>
        </svg> -->
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->
<div class="container icons-display">
<div class="row">
<div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-shield" aria-hidden="true"></i><br>
            Insurance
        </button>
    </div>

    <div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-flask" aria-hidden="true"></i><br>
            PCR-Test
        </button>
    </div>
    <div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-tree" aria-hidden="true"></i><br>
            Trekking
        </button>
    </div>
    <div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-money" aria-hidden="true"></i><br>
            Forex
        </button>
    </div>
    <div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-plane" aria-hidden="true"></i><br>
            Airlines
        </button>
    </div>
    <div class="col-md-2 icon-card">
        <button class="btn btn-danger icon-card-btn">
            <i class="fa fa-bed" aria-hidden="true"></i><br>
            Rooms
        </button>
    </div>    
</div>
</div>


<!-- ================================
    START DESTINATION AREA
================================= -->
<section class="destination-area padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Featured Flights</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">

            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>Los Angeles
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$340</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img2.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>Barcelona
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$740</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img3.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>Dallas
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$140</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img4.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>San Francisco
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$340</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img5.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>Miami
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$100</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="deal-card">
                    <div class="deal-title d-flex align-items-center">
                        <img src="assets/images/airline-img6.png" alt="air-line-img">
                        <h3 class="deal__title">
                            <a href="flight-single.html" class="d-flex align-items-center">
                                New York<i class="la la-exchange mx-2"></i>London
                            </a>
                        </h3>
                    </div>
                    <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                    <div class="deal-action-box d-flex align-items-center justify-content-between">
                        <div class="price-box d-flex align-items-center"><span class="price__from mr-1">From</span><span
                                class="price__num">$640</span></div>
                        <a href="flight-single.html" class="theme-btn theme-btn-small">Reserve Now</a>
                    </div>
                </div><!-- end deal-card -->
            </div><!-- end col-lg-4 -->

        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end destination-area -->
<!-- ================================
    END DESTINATION AREA
================================= -->
<!-- ================================
    START DISCOUNT AREA
================================= -->
<section class="discount-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-box join-us-box">
                    <div class="discount-img">
                        <img src="assets/images/airplane-01.jpg" alt="discount img">
                    </div><!-- end discount-img -->
                    <!-- <div class="discount-content d-flex align-items-center justify-content-between"> -->
                        <!-- <div class="section-heading"> -->
                            <!-- <h2 class="sec__title text-white mb-2">Explore more with us</h2> -->
                            <!-- <p class="sec__desc text-white">Join 2000+ locals & 1200+ contributors from 3000 cities</p> -->
                        <!-- </div> -->
                        <!-- end section-heading -->
                        <!-- <div class="btn-box"> -->
                            <!-- <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- end discount-content -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end discount-area -->
<!-- ================================
    END DISCOUNT AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">How does it work?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-search-plus"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Search For Flights</h4>
                        <p class="info__desc">
                            We have multiple form for serching flights, Here you can choose flights according to your
                            current need.
                        </p>
                        <span class="info__num">1</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-mouse-pointer"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Select and Book</h4>
                        <p class="info__desc">
                            Select the flight shown in search result and book it.
                        </p>
                        <span class="info__num">2</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-3 d-flex">
                    <div class="info-icon flex-shrink-0">
                        <i class="la la-check"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Pay and Fly</h4>
                        <p class="info__desc">
                            Once you have booked the flight make online payment and fly.
                        </p>
                        <span class="info__num">3</span>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->


<!-- ================================
    START DESTINATION AREA
================================= -->
<section class="destination-area position-relative section-bg padding-top-100px padding-bottom-140px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Top Destinations</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-12">
                <div class="car-wrap">
                    <div class="car-carousel carousel-action">
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img src="assets/images/banner-1.jpg" alt="destination-img">
                                <span class="badge">Maldives</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="tour-details.html">Mesmerizing Maldives</a></h3>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__num">Rs. 49,600</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img src="assets/images/banner-2.jpg" alt="destination-img">
                                <span class="badge">Bali/Pattaya/Bora-bora</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="tour-details.html">Bali/Pattaya/Bora-Bora</a></h3>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__num">$500.00</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img src="assets/images/banner-3.jpg" alt="destination-img">
                                <span class="badge">Simla/Manali/Chandigarh</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="tour-details.html">Himachal Tour</a></h3>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__num">Rs.16500</span>
                                        <span class="price__num before-price">Rs.18500</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img src="assets/images/banner-1.jpg" alt="destination-img">
                                <span class="badge">Las Vegas</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="tour-details.html">Planet Hollywood Resort</a></h3>
                                <div class="card-rating d-flex align-items-center">
                                    <span class="ratings d-flex align-items-center mr-1">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-o"></i>
                                    </span>
                                    <span class="rating__text">(70694 Reviews)</span>
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p class="tour__text">
                                        50 Tours
                                    </p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end car-carousel -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end destination-area -->
<!-- ================================
    END DESTINATION AREA
================================= -->


<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Why Sasto Flights?</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-briefcase"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Easy to Book</h4>
                        <p class="info__desc">
                            We have a straight and easy process to book flights.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-exchange"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Easy change</h4>
                        <p class="info__desc">
                            We try our best to make ticket changes easy for you.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-wifi"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Online Support</h4>
                        <p class="info__desc">
                            We provide online support to all our customers
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-5">
                        <i class="la la-plane"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Fly in comfort</h4>
                        <p class="info__desc">
                            Comfortable seats and easy arrangements
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->


<div class="section-block"></div>

<!-- ================================
    START LOW FARE AREA
================================= -->
<section class="low-fare-area padding-bottom-100px">
    <div class="container-fluid">
        <div class="row">
            <div class="discount-box">
                <div class="discount-img">
                    <img src="assets/images/air-banner-1.jpg" alt="scooter-img">
                </div><!-- end discount-img -->
                <div class="discount-content">
                    <div class="section-heading">
                        <h2 class="sec__title mb-2 line-height-50 text-white">Got flexible travel plans?</h2>
                        <p class="sec__desc text-white">Use our Low Fare Calendar to find the cheapest flights available
                            <br> inside your travel window.</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-4">
                        <a href="#" class="theme-btn border-0">Find flights <i class="la la-arrow-right ml-1"></i></a>
                    </div>
                </div><!-- end discount-content -->
            </div>
        </div>
    </div>
</section>
<!-- ================================
    END LOW FARE AREA
================================= -->


<div class="section-block"></div>

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
    <div class="container">
    <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title font-size-35">Our Supported Airlines</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo">
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo2.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo3.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo4.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo5.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="assets/images/client-logo6.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       END CLIENTLOGO AREA
================================= -->


<!-- Model popup for login and register -->
<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text"
                                        placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->



<?php include("footer.php"); ?>