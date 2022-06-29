<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOST FAQS</title>
    <link rel="stylesheet" type="text/css" href="faqsStyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
    <!-- navigation bar -->
    <div class="container">
        <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" width="200px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="#">Best Seller</a></li>
                <li><a href="#">Customize</a></li>
            </ul>
        </nav>
        <a href="#"><img src="images/cart.png" width="25px" height="25px"></a>
        <a href=""><i class="fa-solid fa-user"></i></a>
        <img src="images/menu.png" class="menu_icon" onclick="menutoggle()">
        </div>
    </div>

    <section>
        <div class="faqs_title">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion">
                <div class="icon"></div>
                <h4>COVID-19</h4>
            </div>
            <div class="panel">
                <p>In Cookie Co., we prioritize the safety of both our clients and team members in planning our operations. For the sake of everyone, we have decided to practice food and safety protocols, especially testing our team members for COVID-19 symptoms. </p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>How will I know my order is being processed?</h4>
            </div>
            <div class="panel">
                <p>We will send you an update about your order through your email.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>Where do you deliver?</h4>
            </div>
            <div class="panel">
                <p>We deliver strictly anywhere within the vicinity of Metro Manila to avoid possible complications regarding the delivery process.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>How does shipping work?</h4>
            </div>
            <div class="panel">
                <p>Your deliveries will be handled via third party providers. The delivery service that will handle your order is up to you, but we generally recommend Lalamove as this causes little to no problems.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>Can I order for same day delivery?</h4>
            </div>
            <div class="panel">
                <p>Everything in our menu is available for same day delivery except for customized orders.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>How long do I have to wait for customized orders?</h4>
            </div>
            <div class="panel">
                <p>Customized orders typically take about a week to be made, but this may vary depending on the design given. We will quickly give you an update regarding the status of your order if anything occurs.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>Do you have a physical store?</h4>
            </div>
            <div class="panel">
                <p>We are currently operating as an online bakery and have no existing physical stores.</p>
            </div>
            <div class="accordion">
                <div class="icon"></div>
                <h4>What are your payment methods?</h4>
            </div>
            <div class="panel">
                <li>Credit Card payments via Paypal<br></li>
                <li>Bank Transfer<br></li>
                <li>GCash<br></li>
                <li>PayMaya<br></li>
            </div>
        </div>
    </section>
    <script src="faqs.js"></script>

    <!-- footer -->
    <div class="footer-container">
        <div class="footer">
            <div class="footer-1">
                <h1>From our oven to your door.</h1>
                <h3>REACH US</h3>
                <div class="social-media">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-2">
                <h3>OUR COMMUNITY</h3>
                <a href="#">Registration</a><br>
                <a href="webteam.php">Our Team</a><br>
                <a href="#">Website Feedback</a><br>
            </div>
            <div class="footer-3">
                <h3>SEEK FAQS</h3>
                <a href="about.php">About Cookie Co.</a><br>
                <a href="faqs.php">Most FAQs</a><br>
                <a href="#">Orders</a><br>
                <a href="#">Careers</a><br>
                <a href="#">Delivery</a><br>
            </div>
        </div>
    </div>
    <script src="menu.js"></script>
</body>
</html>