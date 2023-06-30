<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Bakery</title>
    <link rel="shortcut icon" type="image" href="./image/logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- icons links -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons links -->
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation links -->
</head>
<body>
<?php include 'header.php' ?>

        <!-- home section -->
        <div class="home">
            <div class="content" data-aos="zoom-out-right">
                <h3>Delicious
                    <br>Cakes Bakery
                </h3>
                <h2>Category <span class="changecontent"></span></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error,
                    <br>Lorem ipsum dolor sit amet consectetur.
                </p>
                <a href="#" class="btn">Order Now</a>
            </div>
            <div class="img"  data-aos="zoom-out-left">
                <img src="./image/background.png" alt="">
            </div>
        </div>
        <!-- home section end -->

      <!-- top cards -->
      <div class="container" id="box"    data-aos="fade-up"
      data-aos-duration="1500">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./image/box1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./image/box2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./image/box3.jpg" alt="">
                </div>
            </div>
        </div>
      </div>
      <!-- top cards end -->

      <!-- banner -->
        <div class="banner"    data-aos="fade-up"
        data-aos-duration="1500">
            <div class="content">
                <h3>Delicious Cake</h3>
                <h2>UPTO 50% OFF</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quod.</p>
                <div id="btnorder"><button>Order Now</button></div>
            </div>
            <div class="img">
                <img src="./image/banner-background.png" alt="">
            </div>
        </div>
      <!-- banner end -->

      <!-- product cards -->
      <section id="product-cards"    data-aos="fade-up"
      data-aos-duration="1500">
        <div class="container">
            <h1>CAKES</h1>
            <div class="row" style="margin-top:50px;">
               <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./image/c1.png" alt="">
                    <div class="card-body">
                        <h3>Cream Cake</h3>
                        <div class="star">
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star "></i>
                          <i class="bx bxs-star "></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <h6>$50.10 <span><button>Add Cart</button></span></h6>
                    </div>
                </div>
               </div>
               <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./image/c2.png" alt="">
                    <div class="card-body">
                        <h3>Choco Cake</h3>
                        <div class="star">
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star "></i>
                          <i class="bx bxs-star "></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <h6>$60.5 <span><button>Add Cart</button></span></h6>
                    </div>
                </div>
               </div>
               <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./image/c3.png" alt="">
                    <div class="card-body">
                        <h3>Slice Cake</h3>
                        <div class="star">
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star "></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <h6>$100.10 <span><button>Add Cart</button></span></h6>
                    </div>
                </div>
               </div>
               <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <div class="overlay">
                        <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                        <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                    </div>
                    <img src="./image/c4.png" alt="">
                    <div class="card-body">
                        <h3>Fruit Cake</h3>
                        <div class="star">
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                          <i class="bx bxs-star checked"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <h6>$30.20 <span><button>Add Cart</button></span></h6>
                    </div>
                </div>
               </div>
            </div>






            <div class="row" style="margin-top:50px;"    data-aos="fade-up"
            data-aos-duration="1500">
                <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <div class="overlay">
                         <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                     </div>
                     <img src="./image/c5.png" alt="">
                     <div class="card-body">
                         <h3>Brown Cake</h3>
                         <div class="star">
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star "></i>
                           <i class="bx bxs-star "></i>
                         </div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                         <h6>$10.5 <span><button>Add Cart</button></span></h6>
                     </div>
                 </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <div class="overlay">
                         <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                     </div>
                     <img src="./image/c6.png" alt="">
                     <div class="card-body">
                         <h3>Slice Cake</h3>
                         <div class="star">
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star "></i>
                           <i class="bx bxs-star "></i>
                         </div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                         <h6>$15.5 <span><button>Add Cart</button></span></h6>
                     </div>
                 </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <div class="overlay">
                         <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                     </div>
                     <img src="./image/c7.png" alt="">
                     <div class="card-body">
                         <h3>Fruit Cake</h3>
                         <div class="star">
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star "></i>
                         </div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                         <h6>$200.10 <span><button>Add Cart</button></span></h6>
                     </div>
                 </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <div class="overlay">
                         <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                         <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                     </div>
                     <img src="./image/c8.png" alt="">
                     <div class="card-body">
                         <h3>Choco Cake</h3>
                         <div class="star">
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                           <i class="bx bxs-star checked"></i>
                         </div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                         <h6>$30.20 <span><button>Add Cart</button></span></h6>
                     </div>
                 </div>
                </div>
             </div>
        </div>
      </section>


      <section id="product-cards"    data-aos="fade-up"
      data-aos-duration="1500">
        <div class="container">
            <h1>BIRTHDAY CAKE</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                             <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                        </div>
                        <img src="./image/c9.png" alt="">
                        <div class="card-body">
                            <h3>Birthday cake</h3>
                            <div class="star">
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <h6>$500.10 <span><button>Add Cart</button></span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                             <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                        </div>
                        <img src="./image/c10.png" alt="">
                        <div class="card-body">
                            <h3>Bir Cup cake</h3>
                            <div class="star">
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <h6>300.20 <span><button>Add Cart</button></span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                             <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                        </div>
                        <img src="./image/c11.png" alt="">
                        <div class="card-body">
                            <h3>Birthday cake</h3>
                            <div class="star">
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <h6>$100.50 <span><button>Add Cart</button></span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick View"><i><img src="./image/views.png" alt="" width="30px"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="./image/heart.png" alt="" width="30px"></i></button>
                             <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="./image/add.png" alt="" width="30px"></i></button>
                        </div>
                        <img src="./image/c12.png" alt="">
                        <div class="card-body">
                            <h3>Cup cake</h3>
                            <div class="star">
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                                <i class="bx bxs-star checked"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <h6>$50.10 <span><button>Add Cart</button></span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- product cards end-->


      <!-- gallary -->
      <section id="gallary"    data-aos="fade-up"
      data-aos-duration="1500">
        <div class="container">
            <h1>OUR GALLARY</h1>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Donuts</h3>
                        </div>
                        <img src="./image/o1.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Ice Cream</h3>
                        </div>
                        <img src="./image/o2.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Cup Cake</h3>
                        </div>
                        <img src="./image/o3.png" alt="">
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 30px;"    data-aos="fade-up"
            data-aos-duration="1500">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Delicious Cake</h3>
                        </div>
                        <img src="./image/o4.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Chocolate Cake</h3>
                        </div>
                        <img src="./image/o5.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <div class="overlay">
                            <h3 class="text-center">Slice Cake</h3>
                        </div>
                        <img src="./image/o6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- gallary -->



      <!-- about -->
      <div class="container" id="about"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1>ABOUT US</h1>
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./image/about.png" alt="">
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias explicabo nulla dicta perferendis cupiditate autem assumenda unde fugit? Corrupti ipsa fugiat similique voluptate temporibus, cupiditate cumque iusto? Necessitatibus suscipit qui molestias odit ad aspernatur harum aliquid ipsam nisi, culpa quae, magnam dolores cupiditate velit exercitationem ratione deleniti dignissimos labore quia esse ea quos consequuntur perferendis aliquam. Est assumenda doloremque nobis, tenetur fuga similique eligendi nihil non officia possimus aliquid animi nisi ipsum qui veritatis repellat harum accusamus odit iusto laudantium voluptatum ipsa ut fugit veniam. Voluptates sint molestiae officia consequuntur iure repudiandae autem reiciendis, perspiciatis veritatis soluta quia velit necessitatibus.</p>                

                <div id="bt"><button>Read More...</button></div>
            </div>
        </div>
      </div>
      <!-- about -->


      <!-- contact  -->
      <div class="container" id="contact"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1>CONTACT US</h1>
        <div class="row">
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="text" class="form-control" id="usr" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="email" class="form-control" id="eml" placeholder="Email">
                </div>
            </div>
            <div class="col-md-4 py-1 py-md-0">
                <div class="form-group">
                    <input type="number" class="form-control" id="phn" placeholder="Phone">
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
        </div>
        <div id="messagebtn"><button>Send Message</button></div>
      </div>
      <!-- contact end -->


      <!-- footer -->
      <footer id="footer"    data-aos="fade-up"
      data-aos-duration="1500">
        <h1 class="text-center">Cake Bakery</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, accusantium.</p>
        <div class="icons text-center">
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-google"></i>
            <i class="bx bxl-skype"></i>
            <i class="bx bxl-instagram"></i>
        </div>
        <div class="copyright text-center">
            &copy; Copyright <strong>Cake Bakery</strong> .All Rights Reserved
        </div>
        <div class="credite text-center">
            Designed By <a href="#"><span>SA coding</span></a>
        </div>
      </footer>
      <!-- footer -->

      <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>



    </div>





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>