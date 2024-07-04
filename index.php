
<!DOCTYPE html>
<html lang="zxx">

<head>
<title>TLL Fleet - Premier Car Rental Service in Dubai</title>
    <link rel="icon" href="images/t-icon.png" type="image/png" sizes="100x100">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="TLL Fleet offers premier car rental services in Dubai, featuring a diverse fleet of luxury, economy, and SUV vehicles. Enjoy competitive pricing, 24/7 road assistance, and first-class services." name="description">
    <meta content="car rental, Dubai car rental, luxury car rental Dubai, economy car rental Dubai, SUV rental Dubai, TLL Fleet, vehicle rental service, car hire Dubai" name="keywords">
    <meta content="Endeavour Digital" name="author">

    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->
<?php include "include/header.php" ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax full-height vertical-center">
                <img src="images/fleetmm.png" class="jarallax-img" alt="">
                <div class="container position-relative z1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-light">
                            <h4><span class="id-color">Fast and Easy Way to Rent a Car</span></h4>
                            <div class="spacer-10"></div>
                            <h1 class="mb-2">Explore the Dubai with comfortable car</h1>
                            <div class="spacer-10"></div>
                            <p class="lead">Experience Dubai in style with our selection of luxury vehicles. From sleek sedans to powerful sports cars, our luxury fleet is designed for those who demand the best. Brands include:</p>
                        </div>

                        <div class="col-lg-6">
                            <div class="spacer-single sm-hide"></div>
                            <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                

                                <form name="contactForm" id='contact_form' method="post">
                                    <h5>What is your vehicle type?</h5>

                                    <div class="de_form de_radio row g-3">
                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1a" name="Car_Type" type="radio" value="Residential" checked="checked">
                                            <label for="radio-1a"><img src="images/select-form/car.png" alt="">Car</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1b" name="Car_Type" type="radio" value="Office">
                                            <label for="radio-1b"><img src="images/select-form/van.png" alt="">Van</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1c" name="Car_Type" type="radio" value="Commercial">
                                            <label for="radio-1c"><img src="images/select-form/minibus.png" alt="">Minibus</label>
                                        </div>

                                        <div class="radio-img col-lg-3 col-sm-3 col-6">
                                            <input id="radio-1d" name="Car_Type" type="radio" value="Retail">
                                            <label for="radio-1d"><img src="images/select-form/sportscar.png" alt="">Prestige</label>
                                        </div>
                                    </div>

                                    <div class="spacer-20"></div>

                                    <div class="row">
                                        <div class="col-lg-6 mb20">
                                            <h5>Name</h5>
                                            <input type="text" name="PickupLocation"  placeholder="Enter Your Name" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Contact</h5>
                                            <input type="text" name="DropoffLocation" placeholder="Enter Your Contact" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb20">
                                            <h5>Pick Up Location</h5>
                                            <input type="text" name="PickupLocation"  placeholder="Enter your pickup location" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Drop Off Location</h5>
                                            <input type="text" name="DropoffLocation" placeholder="Enter your dropoff location" class="form-control">

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Pick Up Date & Time</h5>
                                            <div class="date-time-field">
                                                <input type="text" id="date-picker" name="Pick Up Date" value="">
                                                <select name="Pick Up Time" id="pickup-time">
                                                    <option selected disabled value="Select time">Time</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Return Date & Time</h5>
                                            <div class="date-time-field">
                                                <input type="text" id="date-picker-2" name="Collection Date" value="">
                                                <select name="Collection Time" id="collection-time">
                                                    <option selected disabled value="Select time">Time</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <input type='submit' id='send_message' value='Find a Vehicle' class="btn-main pull-right">

                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="position-absolute d-flex bottom-20">
                  <div class="de-marquee-list style-2">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Pickup Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                     </div>
                  </div>

                  <div class="de-marquee-list style-2">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Pickup Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                     </div>
                  </div>
                </div>
            </section>

            <section aria-label="section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Our Features</h2>
                            <p> Explore our wide range of vehicles on our website.</p>
                            <div class="spacer-20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-3">
                            <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                                <i class="fa bg-color fa-trophy"></i>
                                <div class="d-inner">
                                    <h4>First class services</h4>
                                    Experience premium, personalized car rental services at every step.
                                </div>
                            </div>
                            <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                                <i class="fa bg-color fa-road"></i>
                                <div class="d-inner">
                                    <h4>24/7 road assistance</h4>
                                    Enjoy peace of mind with round-the-clock support for any issues.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img src="images/misc/car.png" alt="" class="img-fluid wow fadeInUp">
                        </div>

                        <div class="col-lg-3">
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                                <i class="fa bg-color fa-tag"></i>
                                <div class="d-inner">
                                    <h4>Quality at Minimum Expense</h4>
                                    Affordable rates without compromising on the quality you deserve.
                                </div>
                            </div>
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                                <i class="fa bg-color fa-map-pin"></i>
                                <div class="d-inner">
                                    <h4>Free Pick-Up & Drop-Off</h4>
                                    Convenient, complimentary pick-up and drop-off service for your ease.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-light jarallax">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInRight">
                            <h2>We offer customers a wide range of <span class="id-color">commercial cars</span> and <span class="id-color">luxury cars</span> for any occasion.</h2>
                        </div>
                        <div class="col-lg-6 wow fadeInLeft">
                        At Tll Fleet, we pride ourselves on being Dubai's leading car rental company, offering a seamless and luxurious travel experience. Our fleet includes a wide range of vehicles, from economical options to high-end luxury cars, ensuring that we meet the diverse needs of our clients. Whether you're in Dubai for business, leisure, or special occasions, Tll Fleet is committed to providing you with the highest standards of service and reliability.
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="5000" data-speed="3000">0</h3>
                                Hours of Work
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="1567" data-speed="3000">0</h3>
                                Clients Supported
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="6" data-speed="3000">0</h3>
                                Awards Winning
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="3" data-speed="3000">0</h3>
                                Years Experience
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-cars">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Our Vehicle Fleet</h2>
                            <p>Whether you need a car for a day, a week, or a month, Tll Fleet offers flexible short-term rental options. Choose from our wide range of vehicles to find the perfect match for your stay in Dubai.</p>
                            <div class="spacer-20"></div>
                        </div>

                        <div id="items-carousel" class="owl-carousel wow fadeIn">

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/jeep-renegade.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Jeep Renegade</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>74</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">SUV</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/bmw-m5.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>BMW M2</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>36</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">Sedan</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/ferrari-enzo.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Ferarri Enzo</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>85</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">Exotic Car</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/ford-raptor.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Ford Raptor</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>59</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">Pickup Truck</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/mini-cooper.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Mini Cooper</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>19</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">Hatchback</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="images/cars/vw-polo.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>VW Polo</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>79</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1.svg" alt="">5</span>
                                                <span class="d-atr"><img src="images/icons/2.svg" alt="">2</span>
                                                <span class="d-atr"><img src="images/icons/3.svg" alt="">4</span>
                                                <span class="d-atr"><img src="images/icons/4.svg" alt="">Hatchback</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <section class="text-light jarallax" aria-label="section">
    <img src="images/background/3.jpg" alt="" class="jarallax-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-light">
                <div class="container-timeline">
                    <ul>
                        <li>
                            <h4>Choose a vehicle</h4>
                            <p style="text-align: justify;">Explore our diverse fleet and select the perfect vehicle for your needs, from luxury cars to economical options.</p>
                        </li>
                        <li>
                            <h4>Pick location &amp; date</h4>
                            <p style="text-align: justify;">Select your preferred pick-up and drop-off locations and specify the dates for your rental period.</p>
                        </li>
                        <li>
                            <h4>Make a booking</h4>
                            <p style="text-align: justify;">Complete your reservation with our easy-to-use booking system, ensuring a seamless and hassle-free process.</p>
                        </li>
                        <li>
                            <h4>Sit back &amp; relax</h4>
                            <p style="text-align: justify;">Enjoy your journey with Tll Fleet, knowing that our first-class service and 24/7 road assistance have you covered.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


           
<section id="section-faq">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Have Any Questions?</h2>
                <div class="spacer-20"></div>
            </div>
        </div>
        <div class="row g-custom-x">
            <div class="col-md-6 wow fadeInUp">
                <div class="accordion secondary">
                    <div class="accordion-section">
                        <div class="accordion-section-title" data-tab="#accordion-1">
                            How do I rent a car from Tll Fleet?
                        </div>
                        <div class="accordion-section-content" id="accordion-1">
                            <p>Renting a car from Tll Fleet is easy. Simply browse our fleet online, select your preferred vehicle, choose your rental dates, and complete the booking process. Our team is available to assist you at every step.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-2">
                            What documents do I need to rent a car?
                        </div>
                        <div class="accordion-section-content" id="accordion-2">
                            <p>To rent a car, you will need a valid driver's license, a passport or Emirates ID, and a credit card for the security deposit. International visitors may need an International Driving Permit (IDP).</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-3">
                            Are there any mileage limits on the rental cars?
                        </div>
                        <div class="accordion-section-content" id="accordion-3">
                            <p>Most of our rental plans come with unlimited mileage, allowing you to explore freely without worrying about extra charges. Please check the specific terms for your chosen vehicle during booking.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 wow fadeInUp">
                <div class="accordion secondary">
                    <div class="accordion-section">
                        <div class="accordion-section-title" data-tab="#accordion-b-4">
                            What if I have an issue with the car?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-4">
                            <p>If you encounter any issues with your rental car, our 24/7 road assistance service is available to help. Contact our support team immediately, and we will ensure you receive the necessary assistance.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-b-5">
                            Can I extend my rental period?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-5">
                            <p>Yes, you can extend your rental period by contacting our customer service team. We recommend notifying us as soon as possible to ensure availability and to adjust your booking accordingly.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-b-6">
                            Is there a cancellation policy?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-6">
                            <p>Yes, we have a flexible cancellation policy. You can cancel your booking free of charge up to 24 hours before the scheduled pick-up time. Please review our terms and conditions for more details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <section id="section-testimonials" class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-4">
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       I have been using TLL Fleet for my Tips &amp; Trick needs for over 5 years now. I have never had any problems with their service. Their customer support is always responsive and helpful. I would recommend TLL Fleet to anyone looking for a reliable Tips &amp; Trick provider.
                                       <span class="by">Stepanie Hutchkiss</span>
                                   </blockquote>
                                </div> 
                                <img src="images/testimonial/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       We have been using TLL Fleet for our trips needs for several years now and have always been happy with their service. Their customer support is Excellent Service! and they are always available to help with any issues we have. Their prices are also very competitive.
                                       <span class="by">Jovan Reels</span>
                                   </blockquote>
                                </div>
                                <img src="images/testimonial/2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       Endorsed by industry experts, TLL Fleet is the Tips &amp; Trick solution you can trust. With years of experience in the field, we provide fast, reliable and secure Tips &amp; Trick services.
                                       <span class="by">Kanesha Keyton</span>
                                   </blockquote>
                                </div>
                                <img src="images/testimonial/3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

           
            
        </div>
       <?php include "include/footer.php" ?>