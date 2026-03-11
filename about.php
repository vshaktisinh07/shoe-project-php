<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="shoe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>


    <style>
        .video {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 500px;
            /* padding-inline: 50px; */
            /* padding-left: 150px; */
        }

        .video video {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .video-text {
            display: flex;
            flex-direction: column;
            gap: 50px;
            padding-top: 150px;
            justify-content: center;
            align-items: center;
        }


        .video-text h2 {

            font-size: 60px;
        }

        .video-text p {
            text-align: center;
            padding-inline: 400px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>

    <div class="Best-seller">
        <div class="Best-seller-text">
            <span style="font-size: 100px; padding-bottom: 20px;">About Us</span>
        </div>


        <div class="video">
            <video autoplay muted loop class="myvideo">
                <source src="video.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="video-text">
            <h2>Our Approach</h2>
            <p>Discover the perfect blend of style, comfort, and durability with our latest shoe collection — designed for everyday wear, but crafted to make a statement. Whether you're navigating city streets, heading to the office, or catching up with friends, these shoes are your go-to companion for every step.</p>

            <h2>Why Choose Us?</h2>
            <div class="features">
                <div class="fcard1">
                    <div class="fimg1">
                        <img src="recycle.svg" alt="Sustainable Materials">
                    </div>
                    <div class="ftext">
                        <h1>Sustainable Materials</h1><br>
                        <span>We believe great style shouldn’t</span><br>
                        <span>come at the planet’s expense.</span>
                    </div>
                </div>
                <div class="fcard2">
                    <div class="fimg2">
                        <img src="Warranty.svg" alt="Sustainable Materials">
                    </div>
                    <div class="ftext">
                        <h1>Warranty Included</h1><br>
                        <span>Every pair comes with a hassle-</span><br>
                        <span>free 6-month warranty</span>
                    </div>
                </div>
                <div class="fcard3">
                    <div class="fimg3">
                        <img src="Delivery.svg" alt="Sustainable Materials">
                    </div>
                    <div class="ftext">
                        <h1>Delivery & Shipping</h1><br>
                        <span>Your shoes will be dispatched</span><br>
                        <span>within 1-2 business days</span>
                    </div>
                </div>
                <div class="fcard4">
                    <div class="fimg4">
                        <img src="Eco-Friendly.svg" alt="Sustainable Materials">
                    </div>
                    <div class="ftext">
                        <h1>Eco-Friendly Fabrics</h1><br>
                        <span>Crafted with sustainability in </span><br>
                        <span>mind, our shoes feature eco-</span><br>
                        <span>friendly fabrics</span>

                    </div>
                </div>
            </div>
        </div>



        <div class="other">
            <div class="our">
                <span>What People Says</span>
            </div>
            <div class="arrow">
                <div id="left">
                    <i class="fa-solid fa-arrow-left" id="left"></i>
                </div>
                <div id="right">
                    <i class="fa-solid fa-arrow-right" id="right"> </i>
                </div>
            </div>
        </div>

        <div class="feedback">
            <section id="card1" class="card">
                <img src="feedface1.svg" alt="">
                <div class="card__content">
                    <p class="card__title">Harper Jackson</p>
                    <p class="card__description">
                        “I've never worn shoes this stylish that also feel like walking on clouds. The quality is top-notch, and I get compliments everywhere I go!”
                    </p>
                </div>
            </section>
            <section id="card1" class="card">
                <img src="feedface2.png" alt="">
                <div class="card__content">
                    <p class="card__title">Mason Jack</p>
                    <p class="card__description">
                        “Finding shoes that fit well is always a struggle for me. But here, the sizing guide was spot on and the shoes feel custom-made. Highly recommend!”
                    </p>
                </div>
            </section>
            <section id="card1" class="card">
                <img src="feedface3.png" alt="">
                <div class="card__content">
                    <p class="card__title">Avery Wyatt</p>
                    <p class="card__description">
                        “I've never worn shoes this stylish that also feel like walking on clouds. The quality is top-notch, and I get compliments everywhere I go!”
                    </p>
                </div>
            </section>
            <section id="card1" class="card">
                <img src="feedface4.jfif" alt="">
                <div class="card__content">
                    <p class="card__title">Harper Jackson</p>
                    <p class="card__description">
                        “I've never worn shoes this stylish that also feel like walking on clouds. The quality is top-notch, and I get compliments everywhere I go!”
                    </p>
                </div>
            </section>
        </div>

        <?php include "footer.php"; ?>

</body>

</html>