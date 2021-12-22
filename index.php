<!DOCTYPE html>
<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

    if (isset($_POST['send'])) {
    
        $email = '';
        $password = '';
        $host = '';
            
        $mail = new PHPMailer;
    
        $mail->isSMTP(); // use smtp
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $email;
        $mail->Password = $password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
    
        $mail->setFrom($password, 'Sender');
        $mail->addReplyTo($_POST['emailreply'], 'Reply');
    
        // recipient
        $mail->addAddress($email);
    
        $mail->isHTML(true);
    
        $mail->Subject = $_POST['subject'];
    
        $mail->Body = $_POST['msg'];
    

        $mail->send();
        /*if (!$mail->send()) {
            echo 'Error'.$mail->ErrorInfo;
        } else {
            echo 'Sent.';
        } */
    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Lato:wght@300;600;700;800;900&family=Montserrat:wght@300;400;500;600;700;800&family=Roboto&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/ccad127c8d.js" crossorigin="anonymous"></script>
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="big-container">
    <!-- Mobile navbar -->
    <nav class="mobile-nav" role="navigation">
        <div id="menuToggle">
            <input class="checkbox-burger" type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li><a href="#">MENS</a></li>
                <li><a href="#">WOMENS</a></li>
                <li><a href="#">POPULAR</a></li>
                <li><a href="#">NEW ARRIVALS</a></li>
                <li><a href="#">BEST SELLERS</a></li>
                <li><a href="#">SPECIAL OFFERS</a></li>
                <li><a href="#">COMING SOON</a></li>
                <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>
        <a href="https://www.google.com" id="mobile-logo"><span>AVENUE</span> FASHION</a>
        <a href="#" class="mobile-cart-a"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                </path>
            </svg></a>
    </nav>
    
    <!-- Desktop top navbar with cart, logins, etc... -->
    <div class="navbar navbar-main">
        <a href="#">Currency : #</a>
        <div class="navbar-right">
            <a href="#">Register</a>
            <a href="#">Sign In</a>
            <a href="#" class="cart-a"><i class="far fa-laugh-wink"></i>
                &nbsp;empty cart</a>
        </div>
    </div>

    <!-- Main content -->
    <div class="container">
        <div class="top-content">
            <img class="main-img" src="images/person.png" alt="Large photo of male in white t-shirt">
            <div id="large-ave">A&nbsp;&nbsp;V&nbsp;&nbsp;E</div>
            <div class="navbar navbar-selection-main">
                <a class="home-logo" href="#"><span>AVENUE</span>&nbsp;FASHION</a>
                <div class="navbar-right">
                    <div class="dropdown">
                        <a href="#">MENS<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <div class="dropdown-content">
                            <div class="menu-column">
                                <a class="menu-link-title" href="#">CASUALS</a>
                                <a href="#">Jackets</a>
                                <a href="#">Hoodies & Sweatshirts</a>
                                <a href="#">Polo Shirts</a>
                                <a href="#">Sportswear</a>
                                <a href="#">Trousers & Chinos</a>
                                <a href="#">T-Shirts</a>
                            </div>

                            <div class="menu-column">
                                <a class="menu-link-title" href="#">FORMAL</a>
                                <a href="#">Jackets</a>
                                <a href="#">Shirts</a>
                                <a href="#">Suits</a>
                                <a href="#">Trousers</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#">WOMENS<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <div class="dropdown-content">
                            <div class="menu-column">
                                <a class="menu-link-title" href="#">CASUALS</a>
                                <a href="#">Jackets</a>
                                <a href="#">Hoodies & Sweatshirts</a>
                                <a href="#">Polo Shirts</a>
                                <a href="#">Sportswear</a>
                                <a href="#">Trousers & Chinos</a>
                                <a href="#">T-Shirts</a>
                            </div>

                            <div class="menu-column">
                                <a class="menu-link-title" href="#">FORMAL</a>
                                <a href="#">Jackets</a>
                                <a href="#">Shirts</a>
                                <a href="#">Suits</a>
                                <a href="#">Trousers</a>
                            </div>
                        </div>
                    </div>
                    <!-- has to also be .dropwown, otherwise goes out of order -->
                    <div class="dropdown">
                        <a href="#">THE BRAND</a>
                    </div>
                    <div class="dropdown">
                        <a href="#">LOCAL STORES<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <div class="dropdown-content">
                            <div class="menu-column">
                                <a class="menu-link-title" href="#">CASUALS</a>
                                <a href="#">Jackets</a>
                                <a href="#">Hoodies & Sweatshirts</a>
                                <a href="#">Polo Shirts</a>
                                <a href="#">Sportswear</a>
                                <a href="#">Trousers & Chinos</a>
                                <a href="#">T-Shirts</a>
                            </div>

                            <div class="menu-column">
                                <a class="menu-link-title" href="#">FORMAL</a>
                                <a href="#">Jackets</a>
                                <a href="#">Shirts</a>
                                <a href="#">Suits</a>
                                <a href="#">Trousers</a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#">LOOK BOOK<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <div class="dropdown-content">
                            <div class="menu-column">
                                <a class="menu-link-title" href="#">CASUALS</a>
                                <a href="#">Jackets</a>
                                <a href="#">Hoodies & Sweatshirts</a>
                                <a href="#">Polo Shirts</a>
                                <a href="#">Sportswear</a>
                                <a href="#">Trousers & Chinos</a>
                                <a href="#">T-Shirts</a>
                            </div>

                            <div class="menu-column">
                                <a class="menu-link-title" href="#">FORMAL</a>
                                <a href="#">Jackets</a>
                                <a href="#">Shirts</a>
                                <a href="#">Suits</a>
                                <a href="#">Trousers</a>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="middle-content">
            <hr>
            <div class="navbar navbar-selection-middle">
                <a href="#">POPULAR</a>
                <a href="#">NEW ARRIVALS</a>
                <a href="#">BEST SELLERS</a>
                <a href="#">SPECIAL OFFERS</a>
                <a href="#">COMING SOON</a>
            </div>
            <div class="gallery">
                <!--<div class="gallery1">-->
                    <a data-tilt class="item1 small" href="#"><div><span>89.99</span><img src="images/person0.png" alt=""></div></a>
                    <a data-tilt class="item2 small" href="#"><div><span>47.50</span><img src="images/person1.png" alt=""></div></a>
                    <a data-tilt class="item3 big" href="#"><div><span>69.95</span><img src="images/person2.png" alt=""></div></a>
                <!--<div class="gallery2">-->
                    <a data-tilt class="item1 big" href="#"><div><span>89.99</span><img src="images/person3.png" alt=""></div></a>
                    <a data-tilt class="item2 small" href="#"><div><span>29.95</span><img src="images/person4.png" alt=""></div></a>
                    <a data-tilt class="item3 small" href="#"><div><span>4.79</span><img src="images/person5.png" alt=""></div></a>
                    <a data-tilt class="item1 big" href="#"><div><span>89.99</span><img src="images/person3.png" alt=""></div></a>
                    <a data-tilt class="item2 small" href="#"><div><span>47.50</span><img src="images/person1.png" alt=""></div></a>
            </div>
        </div>
        <div class="bottom-content">
            <hr>
            <div class="bottom-content-options">
                <div class="item">
                    <img src="images/person6.png" alt="">
                    <div>
                    <h2>MEN'S<br>LOOKBOOK</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quis.</p>
                    <a href="#">VIEW NOW</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/person7.png" alt="">
                    <div>
                    <h2>WOMEN'S<br>LOOKBOOK</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quis.</p>
                    <a href="#">VIEW NOW</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/personshadow.png" alt="">
                    <div>
                    <h2>YOUR<br>LOOKBOOK</h2>
                    <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quis.</p>
                    <a href="#">VIEW NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <form action="" class="contact" method="post">
            <h2>Contact Us</h2>
            <div class="fields">
                <label for="email">
                    <input type="text" name="emailreply" placeholder="Your Email" required>
                </label>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="msg" placeholder="Message" required></textarea>
            </div>
            <input type="submit" name="send">
        </form>
        <div class="bottom-details">
            <div class="list1">
                <h6>WHY BUY FROM US</h6>
                <ul>
                    <li><a href="#">Shipping & returns</a></li>
                    <li><a href="#">Secure shopping</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Award winning</a></li>
                    <li><a href="#">Ethical trading</a></li>
                </ul>
            </div>
            <div class="list2">
                <h6>YOUR ACCOUNT</h6>
                <ul>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">View cart</a></li>
                    <li><a href="#">View your lookbook</a></li>
                    <li><a href="#">Track an order</a></li>
                    <li><a href="#">Update information</a></li>
                </ul>
            </div>
            <div class="list3">
                <h6>LOOKBOOK</h6>
                <ul>
                    <li><a href="#">Latest posts</a></li>
                    <li><a href="#">Men's lookbook</a></li>
                    <li><a href="#">Women's lookbook</a></li>
                    <li><a href="#">Lookbooks RSS feed</a></li>
                    <li><a href="#">View your lookbook</a></li>
                    <li><a href="#">Delete your lookbook</a></li>
                </ul>
            </div>
            <div class="list4">
                <h6>CONTACT DETAILS</h6>
                <ul>
                    <li><a href="#">Head Office Avenue Fashion, 180-182 Regent Street, London</a></li>
                    <li><a href="tel:0123456789">Telephone: 0123456789</a></li>
                    <li><a href="mailto:support@yourwebsite.com">Email: support@yourwebsite.com</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="navbar-bottom">
        &copy; 2016 Avenue Fashion&trade;
        <div class="navbar-right">
            Design by RobbyDesigns.com
            Dev by nezkart
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="scripts/tilt.jquery.js"></script>
    <script src="scripts/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <script src="scripts/js.js" type="text/javascript"></script>

</body>

</html>