<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <style>
        [data-aos] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s;
        }
        
        .slider_section {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>

</body>

</html>
<section class="slider_section ">
    <div class="slider_bg_box">
        <img src="images/slider_bg.jpeg" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container" class="box" data-aos="fade-in" data-aos-duration="800">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                        Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                </h1>
                                <p>
                                    Welcome to <b style="font-family: 'Comic Sans MS', 'Comic Sans', cursive;"><strong
                                            style="color: #F7444E;">a</strong>R <strong
                                            style="color: #F7444E;">C</strong>ommrce</b> , your one-stop destination for
                                    the latest fashion
                                    trends, stylish apparel, and wardrobe essentials. With the convenience of online
                                    shopping, we've made it easier than ever for you to elevate your style game and shop
                                    for the hottest clothing items from the comfort of your own home. Whether you're
                                    looking for trendy outfits, classic staples, or unique statement pieces, we've got
                                    you covered. Explore our extensive collection of clothing, and let your fashion
                                    journey begin! </p>
                                <div class="btn-box">
                                    <a href="{{ url('products') }}" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container " class="box" data-aos="fade-in" data-aos-duration="800">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                        Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                </h1>
                                <p>
                                    Welcome to <b style="font-family: 'Comic Sans MS', 'Comic Sans', cursive;"><strong
                                            style="color: #F7444E;">a</strong>R <strong
                                            style="color: #F7444E;">C</strong>ommrce</b> , your one-stop destination for
                                    the latest fashion
                                    trends, stylish apparel, and wardrobe essentials. With the convenience of online
                                    shopping, we've made it easier than ever for you to elevate your style game and shop
                                    for the hottest clothing items from the comfort of your own home. Whether you're
                                    looking for trendy outfits, classic staples, or unique statement pieces, we've got
                                    you covered. Explore our extensive collection of clothing, and let your fashion
                                    journey begin! </p>
                                <div class="btn-box">
                                    <a href="{{ url('products') }}" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container "  class="box" data-aos="fade-in" data-aos-duration="800">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>
                                    <span>
                                        Sale 20% Off
                                    </span>
                                    <br>
                                    On Everything
                                </h1>
                                <p>
                                    Welcome to <b style="font-family: 'Comic Sans MS', 'Comic Sans', cursive;"><strong
                                            style="color: #F7444E;">a</strong>R <strong
                                            style="color: #F7444E;">C</strong>ommrce</b> , your one-stop destination for
                                    the latest fashion
                                    trends, stylish apparel, and wardrobe essentials. With the convenience of online
                                    shopping, we've made it easier than ever for you to elevate your style game and shop
                                    for the hottest clothing items from the comfort of your own home. Whether you're
                                    looking for trendy outfits, classic staples, or unique statement pieces, we've got
                                    you covered. Explore our extensive collection of clothing, and let your fashion
                                    journey begin! </p>
                                <div class="btn-box">
                                    <a href="{{ url('products') }}" class="btn1">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"  class="box" data-aos="fade-in" data-aos-duration="800">
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
<script>
    AOS.init();
</script>
<script>
    AOS.init({
        once: true, // Only play animations once
        mirror: false, // Disable mirroring of animations
        offset: 100, // Offset (in pixels) from the top of the viewport
    });
</script>
