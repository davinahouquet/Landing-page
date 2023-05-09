<?php
    require('form-functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Landing Page PDO</title>
</head>
<body>
    <!-- Section 1 - Page d'accueil-->
    <section class="home-page">
    <!-- Navbar -->
       <nav>
            <p class="brand">Kucra</p>

            <ul class="navbar">
                <li><a href="#">HOME</a></li>
                <li><a href="#">FEATURES</a></li>
                <li><a href="#">CLIENT</a></li>
                <li><a href="#pricing-section">PRICING</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>

            <ul class="social">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
       </nav>

<!-- Description + image -->
       <div class="container">
        <div class="description">
        <div class="email">
            <h1>We are StartUp Creative Kucra Agency</h1>
            <p>Carefully crafted after analysing the needs of different industries and the design achieves a great balance between purpose & presentation</p>
            
            <!-- Add email -->
            <div class="form">
            <form action="form-functions.php?action=addEmail" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required class="email-input">
                <input value="SUBSCRIBE" type="submit" class="input-button">
            </form>
            <!-- Ajouter message confirmation ici -->
            </div>

        </div>
        <div class="illustration">
            <img src="illustration.svg" alt="chat-kucra" class="image-illustration">
        </div>
       </div>
    </section>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- Section 2 + cards -->

    <section class="product-features">
        <div class="product-features-description">
            <h2>Product Features</h2>
            <p class="p-product">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
        </div>

        <div class="card-container">
            <div class="card">
                <i class="fa-solid fa-globe" id="icon-card"></i>
                <p class="title-card">Digitial Design</p>
                <p class="text-card">Some quick example text to build on the card title and make up the bulk of the card the platform.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-brush" id="icon-card"></i>
                <p class="title-card">Unlimited Colors</p>
                <p class="text-card">Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt iaoreet.</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-chess" id="icon-card"></i>
                <p class="title-card">Strategy Solutions</p>
                <p class="text-card">Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.</p>
            </div>
        </div>
    </section>

<!---->


<!-- Section 3 : l'équipe-->
    <section class="team-section">

        <div class="team-description">
            <h2 class="team-title">We'r dynamic team of talentend people of innovative & marketing expert</h2>
            <p class="team-text">To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words, if several languages of the resulting language.</p>
        </div>

        <div class="team-pictures">

            <div class="team-member">
                <p class="key-number">1499+</p>
                <p class="number-description">Complete Projects</p>
                <!-- Div contiendra img + icons social -->
                    <div class="picture-container">
                        <img src="./img/person1.png" class="member-picture">
                            <div class="social-container">
                                <a href="#"><i class="fa-brands fa-facebook-f" id="fb"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" id="twi"></i></a>
                                <a href="#"><i <i class="fa-brands fa-skype" id="skype"></i></a>
                            </div>
                    </div>

                <p class="name-member">Anna G. Wilhite</p>
                <p class="job">CEO/Founder</p>
            </div>
            <div class="team-member">
                <p class="key-number">1080K</p>
                <p class="number-description">Satisfied Clients</p>

                <!-- Div contiendra img + icons social -->
                    <div class="picture-container">
                        <img src="img/person2.png" class="member-picture">
                        <div class="social-container">
                            <a href="#"><i class="fa-brands fa-facebook-f" id="fb"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter" id="twi"></i></a>
                            <a href="#"><i class="fa-brands fa-skype" id="skype"></i></a>
                        </div>
                    </div>

                <p class="name-member">William S. Blay</p>
                <p class="job">CTO/Co-Founder</p>
            </div>
            <div class="team-member">
                <p class="key-number">608</p>
                <p class="number-description">Team Members</p>

                <!-- Div contiendra img + icons social -->
                    <div class="picture-container">
                        <img src="img/person3.png" class="member-picture">
                        <div class="social-container">
                            <a href="#"><i class="fa-brands fa-facebook-f" id="fb"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter" id="twi"></i></a>
                            <a href="#"><i class="fa-brands fa-skype" id="skype"></i></a>
                        </div>
                    </div>

                <p class="name-member">Maria B. Morales</p>
                <p class="job">Web Designer</p>
            </div>
            <div class="team-member">
                <p class="key-number">252</p>
                <p class="number-description">Employee</p>

                <!-- Div contiendra img + icons social -->
                    <div class="picture-container">
                        <img src="img/person4.png" class="member-picture">
                        <div class="social-container">
                            <a href="#"><i class="fa-brands fa-facebook-f" id="fb"></i></a>
                            <a href="#"><i  class="fa-brands fa-twitter" id="twi"></i></a>
                            <a href="#"><i  class="fa-brands fa-skype" id="skype"></i></a>
                        </div>
                    </div>

                <p class="name-member">Luke L. Johnston</p>
                <p class="job">Web Developer</p>
            </div>

        </div>
    </section>

    <!-- Section 4 avec l'effet parallax -->
    <section class="parallax">
        <div class="parallax-description">
            <h2 class="parallax-title">Let's get started with Kucra</h2>
            <p  class="parallax-text">They are a good way to get you started if you want to buils something similar or use from existing apps which will reduce the cost, efforts and time of the developpers.</p>
            <button class="parallax-button"><a href="#">Get Started</a></button>
        </div>
    </section>

    <!-- Section 5 : le blog -->

    <section class="blog">
        
        <div class="blog-section-description">
            <h2 class="blog-main-title">Our Blog</h2>
            <p class="blog-section-description">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
        </div>
        
        <div class="blog-container">
            
            <div class="blog-card">
                
                    <div class="image-author-date">
                        <div class="blog-image"><img src="img/blog2.png" class="blog-image-image">
                            <div class="blog-name-date">
                                <div class="blog-name"><i class="fa-regular fa-user" class="blog-user-icon"></i> Calvin Carlo</div>
                                <div class="blog-date"><i class="fa-regular fa-clock" class="blog-time-icon"></i> 20th March 2021</div>
                            </div>
                        </div>
                    </div>

                    <h3 class="blog-title"> Doing a cross country road trip</h3>
                    <p class="blog-text"> We craft digital, graphic and dimensional thinking, to create category leading brand.</p>
                
                </div>

                <div class="blog-card">

                    <div class="image-author-date">
                        <div class="blog-image"><img src="img/blog1.png" class="blog-image-image">
                            <div class="blog-name-date">
                                <div class="blog-name"><i class="fa-regular fa-user" class="blog-user-icon"></i> Ruben Reed</div>
                                <div class="blog-date"><i class="fa-regular fa-clock" class="blog-time-icon"></i> 01th July 2021</div>
                            </div>
                        </div>
                    </div>
                    <h3 class="blog-title">New exhibition at our Museum</h3>
                    <p class="blog-text">Even the all-powerful Pointing has no control about the blind almost unorthographic.</p>
                </div>

                <div class="blog-card">

                    <div class="image-author-date">
                        <div class="blog-image"><img src="img/blog3.png" class="blog-image-image">
                            <div class="blog-name-date">
                                <div class="blog-name"><i class="fa-regular fa-user" class="blog-user-icon"></i> Theresa Sinclair</div>
                                <div class="blog-date"><i class="fa-regular fa-clock" class="blog-time-icon"></i> 25th July 2021</div>
                            </div>
                        </div>
                    </div>
                    <h3 class="blog-title">Design your apps in your own way</h3>
                    <p class="blog-text">Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                </div>
            </div>
    </section>
    <!-- Section 6 : Pricing -->
    <section class="pricing-section" id="pricing-section">

            <div class="pricing-container">

                <div class="pricing-packs-title-text">
                    <h3 class="pricing-title">Our Pricing</h3
                    <p class="pricing-text">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
            <div class="container-packs">
                <?php
                    
                    foreach(getAllPricings() as $pricing){
                ?>
                        
                        <div class="pricing-packs">
                         <div class="pricing-pack">
                                <p class="pack-type"><p><?= $pricing['name'] ?></p>
                                    <div class="pack-price">
                                        <sup class="dollar">$</sup>
                                        <p class="price"><?= $pricing['price'] ?></p>
                                        <span>/month</span>
                            </div>
                            <div class="lists-options">
                                <ul class="options">
                                    <li>
                                        <div><i class="fa-regular fa-circle-check" id="check"></i>Bandwidth</div>
                                        <p><?= $pricing['bandwidth_gb'] ?>GB</p>
                                    </li>
                                    <li>
                                        <!-- Must insert MB values only (bc it won't convert to GB)-->
                                        <div><i class="fa-regular fa-circle-check" id="check"></i>Onlinespace</div>
                                        <p><?= ($pricing['onlinespace_mb'] >= 1000 ? ($pricing['onlinespace_mb'] / 1000) . ' GB' : $pricing['onlinespace_mb'] . ' MB') ?></p>
                                    </li>
                                    <li>
                                        <!-- operateur ternaire, booleen : condition 1 (ici si c'est égal à 1 = echo Yes)? condition 2 (ici si égal à 0 = echo No) https://stacklima.com/php-operateur-ternaire/#:~:text=op%C3%A9rateur%20ternaire%20%3A%20L'op%C3%A9rateur%20ternaire,code%20effectuant%20des%20op%C3%A9rations%20conditionnelles. -->
                                        <div><i class="fa-regular fa-circle-check" id="<?= ($pricing['support_no'] == 0 ? 'check-red' : 'check') ?>"></i>Support:No</div>
                                        <p><?= ($pricing['support_no'] == 0 ? 'No' : ($pricing['support_no'] == 1 ? 'Yes' : $pricing['support_no'])) ?></p>
                                    </li>
                                    <li>
                                        <div><i class="fa-regular fa-circle-check" id="check"></i>Domain</div>
                                        <p><?= ($pricing['domain'] ? $pricing['domain'] : 'Unlimited') ?></p>
                                    </li>
                                    <li>
                                        <div><i class="fa-regular fa-circle-check" id="<?= ($pricing['hidden_fees'] == 0 ? 'check-red' : 'check') ?>"></i>Hidden Fees</div>
                                        <p><?= ($pricing['hidden_fees'] == 0 ? 'No' : $pricing['hidden_fees']) ?></p>
                                    </li>
                                    <li>
                                        <div class="sale-pricing-pack"><p><?= ($pricing['sale'] == 0 ? '' : 'SALE '.$pricing['sale']) ?></p></div>
                                    </li>
                                </ul>
                            </div>
                            <form action="form-functions.php?action=addPricingPack&id_pricing=<?php echo $pricing["id_pricing"]; ?>" method="POST">
                                    <input name="submit" type="submit" class="pricing-pack-button" value="Join Now"></input>
                            </form>
                        </div>

                <?php
                    }
                ?>
            </div>                                
        </section>
        <div class="container-update-button"><button class="update-button"><a href="http://localhost/Landing-page/admin.php">Click here to update</a></button></div>
        
    <!-- Section 7 : footer -->
    <section class="footer-section">

        <div class="footer-container">
            <ul class="social-footer">
                <li><i class="fa-brands fa-facebook-f" id="fb-footer"></i></li>
                <li><i class="fa-brands fa-twitter" id="twitter-footer"></i></li>
                <li><i class="fa-brands fa-linkedin" id="linkdin-footer"></i></li>
                <li><i class="fa-brands fa-google-plus-g" id="gplus-footer"></i></li>
            </ul>
        </div>
        <div class="footer-text">
            <p class="terms-condition">Terms & Condition  |  Privacy Policy  |  Contact Us </p>
            <p class="kucra-footer">2022 @ Kucra - Landing Page Template by Pichforest</p>
        </div>
    </section>

<script src="script.js"></script>
</body>
</html>