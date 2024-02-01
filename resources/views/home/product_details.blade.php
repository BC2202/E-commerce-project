<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
    <title>E-Commerce</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- Add these links in your HTML head -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Add this script at the end of your body tag -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

    <!-- JavaScript Libraries -->
    <!-- Include the new jQuery version via CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="home/js/jquery.exzoom.js"></script>
    <style>
        [data-aos] {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.product-slider').slick({
                slidesToShow: 4, // Display 4 images at a time
                slidesToScroll: 1, // Scroll 1 image at a time
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            });
        });
    </script>




</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        @include('home.header')
        <!-- End header section -->
        <div class="container" style="padding-block-start:80px;">
            <div data-aos="fade-out" data-aos-duration="800" class="row">

                <div class="col-md-6 img-box">
                    <a data-fancybox="gallery" href="/product/{{ $product->image1 }}">
                        <img style="height: 100%; width:100%" src="/product/{{ $product->image1 }}" alt="">
                    </a>
                </div>
                <tr>
                    <td>
                        <div class="product-slider">
                            <ul>
                                @for ($i = 1; $i <= 24; $i++)
                                    @if ($product->{'image' . $i})
                                        <li class="slider-item">
                                            <img src="{{ asset('product/' . $product->{'image' . $i}) }}"
                                                alt="Product Image {{ $i }}" class="slider-image">
                                        </li>
                                    @endif
                                @endfor
                            </ul>
                        </div>
                    </td>
                    <!-- Add other columns for product details as needed -->
                </tr>


                <div class="col-md-6" class="detail-box">
                    <h5>{{ $product->title }}</h5>
                    @if ($product->discount_price != null)
                        <h6 style="color: red">Discount Price<br>${{ $product->discount_price }}</h6>
                        <h6 style="text-decoration: line-through; color: blue">Price<br>${{ $product->price }}</h6>
                    @else
                        <h6 style="color: blue">Price<br>${{ $product->price }}</h6>
                    @endif
                    <h6>Product Category: {{ $product->category }}</h6>
                    <h6>Product Details: {{ $product->description }}</h6>
                    <h6>Available Quantity: {{ $product->quantity }}</h6><br>
                    <form action="{{ url('add_cart', $product->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input style="margin: 3px; padding: 10px; text-align: center;" type="number"
                                    name="quantity" value="1" min="1" style="width: 100px">
                            </div>
                            <div class="col-md-3">
                                <input type="submit" value="Add To Cart">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="container box" data-aos="fade-in" data-aos-duration="800">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="logo_footer">
                            <a href="#"><img width="210" src="/images/logo2.png" /></a>
                        </div>
                        <div class="information_f">
                            <p><strong>ADDRESS:</strong> Joher Town Lahore</p>
                            <p><strong>TELEPHONE:</strong> +92 318 7097 671</p>
                            <p><strong>EMAIL:</strong> Bc220207619@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget_menu">
                                        <h3>Menu</h3>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Testimonial</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget_menu">
                                        <h3>Account</h3>
                                        <ul>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="{{ url('products') }}">Shopping</a></li>
                                            <li><a href="{{ url('show_order') }}">Order</a></li>
                                            <li><a href="{{ url('show_cart') }}">Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="widget_menu">
                                <h3>Newsletter</h3>
                                <div class="information_f">
                                    <p>Subscribe to our newsletter and get daily updates.</p>
                                </div>
                                <div class="form_sub">
                                    <form>
                                        <fieldset>
                                            <div class="field">
                                                <input type="email" placeholder="Enter Your Mail" name="email" />
                                                <input type="submit" value="Subscribe" />
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="cpy_">
        <p class="mx-auto">©2023 All Rights Reserved By <a href="https://ahmadraza.tech/">Ahmad Raza</a></p>
    </div>
    <!-- jQuery -->
    <script src="/home/js/jquery-3.4.1.min.js"></script>
    <!-- Popper.js -->
    <script src="/home/js/popper.min.js"></script>
    <!-- Bootstrap.js -->
    <script src="/home/js/bootstrap.js"></script>
    <!-- Custom.js -->
    <script src="/home/js/custom.js"></script>

</body>

</html>
