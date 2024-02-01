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

   </style>
</head>
<body>
   
</body>
</html>
<footer>
    <div class="container" class="box" data-aos="fade-in" data-aos-duration="800">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="images/logo2.png" alt="#" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS:</strong>Joher Town Lahore</p>
                   <p><strong>TELEPHONE:</strong> +92 318 7097 671</p>
                   <p><strong>EMAIL:</strong>Bc220207619@gmail.com</p>
                 </div>
              </div>
          </div>
          <style>
            /* CSS for the hover effect */
            .widget_menu ul li a:hover {
                color: #F7444E;
            }
        </style>
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
                      <li><a  href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                      <li><a href="{{url('products')}}">Shopping</a></li>
                      <li><a href="{{url('show_order')}}">Order</a></li>
                      <li><a href="{{url('show_cart')}}">Cart</a></li>
                     </ul>
                </div>
             </div>
                </div>
             </div>     
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update protidin.</p>
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
 <script>
   AOS.init({
       once: true,   // Only play animations once
       mirror: false, // Disable mirroring of animations
       offset: 100,  // Offset (in pixels) from the top of the viewport
   });
</script>
<script>
   AOS.init();
</script>
