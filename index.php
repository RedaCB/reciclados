﻿<!doctype html>
<html>
<head>
    <?php include 'partials/header.php' ?>
</head>

<body>
    <div id="header-holder">
        <div class="bottom-gradiant"></div>
        <nav id="main-nav" class="navbar navbar-default navbar-full">
            <?php include 'partials/navbar.php' ?>
        </nav>
        <div id="top-content" class="container-fluid">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <br>
                        <div class="big-title">Averigua como reciclar un producto correctamente.</div>
                        <br>
                        <br>
                        <div class="domain-search-holder">
                            <form id="domain-search" autocomplete="off" method="POST" action="search.php">
                                <input id="domain-text" type="text" name="barCode" id="barCode" placeholder="Introduce el código de barras..." minlength="13" maxlength="13" required>
                                <span class="inline-button">
                                    <input type="hidden" name="check-search" value="1">
                                    <input id="search-btn" type="submit" name="submit" value="Buscar">
                                </span>
                            </form>
                        </div>
                        <!--
                    <div class="col-md-12">
                        <div class="arrow-button-holder">
                            <a href="#pricing">
                                <div class="arrow-icon">
                                    <i class="sphst sphst-arrow-down"></i>
                                </div>
                                <div class="button-text">Go to plans</div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div id="partners" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">TIPOS DE PLÁSTICO</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Conocer la composición de los productos que consumimos<br> es fundamental para empezar a cuidar de nuestro medio ambiente.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="partners-slider">
                    <div><img src="images\partner1.png" alt=""></div>
                    <div><img src="images\partner2.png" alt=""></div>
                    <div><img src="images\partner3.png" alt=""></div>
                    <div><img src="images\partner4.png" alt=""></div>
                    <div><img src="images\partner5.png" alt=""></div>
                    <div><img src="images\partner6.png" alt=""></div>
                    <div><img src="images\partner7.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="row-title-only container-fluid">
        <div class="container">
            <div class="row">
                <div class="row-title">Why you’ll be happy with Space Host?</div>
            </div>
        </div>
    </div>
    <div id="features" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="images\feature1.svg" alt="">
                        </div>
                        <div class="feature-title">Site Bulilder</div>
                        <div class="feature-details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <h4>Site Bulilder</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="images\feature2.svg" alt="">
                        </div>
                        <div class="feature-title">100% Uptime</div>
                        <div class="feature-details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <h4>100% Uptime</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="images\feature3.svg" alt="">
                        </div>
                        <div class="feature-title">Fast Loaded</div>
                        <div class="feature-details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <h4>Fast Loaded</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="images\feature4.svg" alt="">
                        </div>
                        <div class="feature-title">Upload files</div>
                        <div class="feature-details">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <h4>Upload files</h4>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div id="more-features" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">What we offer?</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Web Hosting</div>
                        <div class="mfeature-text bg-color1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Web Design</div>
                        <div class="mfeature-text bg-color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Support</div>
                        <div class="mfeature-text bg-color3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Web Hosting Plans & Pricing</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="pricing-box">
                        <div class="pricing-content">
                            <div class="pricing-title">Starter</div>
                            <div class="pricing-price">$4.6</div>
                            <div class="pricing-info">Sed ut perspiciatis unde omnis iste natus error sit.</div>
                            <div class="pricing-details">
                                <ul>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-link">
                            <a class="order-link" href="#">Order now <i class="sphst sphst-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="pricing-box best-choise">
                        <div class="pricing-content">
                            <div class="pricing-title">Premier</div>
                            <div class="pricing-price">$8.3</div>
                            <div class="pricing-info">Sed ut perspiciatis unde omnis iste natus error sit.</div>
                            <div class="pricing-details">
                                <ul>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-link">
                            <a class="order-link" href="#">Order now <i class="sphst sphst-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="pricing-box">
                        <div class="pricing-content">
                            <div class="pricing-title">Super Star</div>
                            <div class="pricing-price">$12.7</div>
                            <div class="pricing-info">Sed ut perspiciatis unde omnis iste natus error sit.</div>
                            <div class="pricing-details">
                                <ul>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                    <li>Sed ut perspiciatis unde</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-link">
                            <a class="order-link" href="#">Order now <i class="sphst sphst-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="search-box" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Ready?<br> Let’s get strated.</p>
                    <div class="domain-search-holder">
                        <form id="domain-search2">
                            <input id="domain-text2" type="text" name="domain" placeholder="Write your domain name here..">
                            <span class="inline-button">
                                <input id="search-btn2" type="submit" name="submit" value="Search">
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="domain-pricing" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">What you will get with domain names?</div>
                </div>
            </div>
            <div class="row domain-lists-holder">
                <div class="col-sm-4">
                    <ul class="domain-list">
                        <li>
                            <div class="col-xs-6">.com</div>
                            <div class="col-xs-6">$12.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.club</div>
                            <div class="col-xs-6">$9.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.co</div>
                            <div class="col-xs-6">$12.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.space</div>
                            <div class="col-xs-6">$9.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.us</div>
                            <div class="col-xs-6">$5.95/yr*</div>
                        </li>          
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="domain-list">
                        <li>
                            <div class="col-xs-6">.org</div>
                            <div class="col-xs-6">$9.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.net</div>
                            <div class="col-xs-6">$10.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.me</div>
                            <div class="col-xs-6">$12.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.io</div>
                            <div class="col-xs-6">$19.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.co.uk</div>
                            <div class="col-xs-6">$5.95/yr*</div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="domain-list">
                        <li>
                            <div class="col-xs-6">.info</div>
                            <div class="col-xs-6">$12.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.host</div>
                            <div class="col-xs-6">$9.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.online</div>
                            <div class="col-xs-6">$12.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.site</div>
                            <div class="col-xs-6">$9.95/yr*</div>
                        </li>
                        <li>
                            <div class="col-xs-6">.tech</div>
                            <div class="col-xs-6">$5.95/yr*</div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

    <div class="row-title-only container-fluid">
        <div class="container">
            <div class="row">
                <div class="row-title">What people say about Space Host?</div>
            </div>
        </div>
    </div>

    <div id="testimonials" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-box right-img">
                        <div class="row">
                            <div class="col-xs-3 img-holder dot-color1"><img src="images\person1.jpg" alt=""></div>
                            <div class="col-xs-9">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-box right-img">
                        <div class="row">
                            <div class="col-xs-3 img-holder dot-color2"><img src="images\person2.jpg" alt=""></div>
                            <div class="col-xs-9">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonials-title">Grow with us<br> See results.</div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-box left-img">
                        <div class="row">
                            <div class="col-xs-3 img-holder dot-color3"><img src="images\person3.jpg" alt=""></div>
                            <div class="col-xs-9">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-box left-img">
                        <div class="row">
                            <div class="col-xs-3 img-holder dot-color4"><img src="images\person4.jpg" alt=""></div>
                            <div class="col-xs-9">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Get in touch</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-holder">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <h4>Get the right support</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus<br>error sit voluptatem accusantium<br>Lorem ipsusm set amir</p>
                                    <a href="#">Visit our support portal</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <h4>Talk to customer service</h4>
                                    <p>Olim ut perspiciatis unde omnis iste natus<br>error sit voluptatem accusantium<br>Lorem ipsusm set amir</p>
                                    <a href="#">Call us on 38-244-64-23</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form id="contactform" method="post" action="mailer.php">
                                <div class="form-items-holder">
                                    <div class="col-sm-12 col-md-6"><input type="text" id="name" name="name" placeholder="Your name" required=""></div>
                                    <div class="col-sm-12 col-md-6"><input type="email" id="email" name="email" placeholder="Email Address" required=""></div>
                                    <div class="col-md-12"><textarea id="message" name="message" placeholder="Write a message" required=""></textarea></div>
                                    <div class="ajax-button col-md-12">
                                    <input id="submit" type="submit" value="Send message">
                                    </div>
                                    <div class="col-md-12" id="form-messages"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php include 'partials/navfoot.php' ?>
    <?php include 'partials/footer.php' ?>
</body>
</html>
