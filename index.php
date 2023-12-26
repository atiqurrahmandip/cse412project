

<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home page</title>

        <link rel="stylesheet" href="style.css"> 
        <link rel="stylesheet" href="componentStyle.css">
        <script src="index.js"></script>





    </head>
    <body>

        
        
        <?php include('components/header.php'); ?>


       


        
        <div  id="banner" class=" container-fluid bg-primary py-5 px-0" >
            <div class="row mx-0 align-items-center justify-content-end">
                <div class="col-lg-6 px-md-5 text-center">
                    <h1 id="banner-title" class="display-2 text-uppercase mb-3">Stationary Hub</h1>
                    <p  id="banner-info" class="text-dark mb-4">Discover from out quality pens, notebooks, books and more. Your go-to source for creative tools and organizational essentials.Elevate your ideas with our curated collection of stylish stationary essentials for every creative mind.</p>
                    <a id="explore-btn" class="btn  mt-1 py-3 px-5">Explore Now</a>
                </div>
            </div>
        </div>







        
        <!-- Service Start from here-->
        <div class="container-xxl py-2  pt-3"  >
            <div class="container-fluid  " >
                <div class="text-center " >
                    <h5 class="section-title ff-secondary text-center  fw-normal">Our Services</h5>
                    <h1 class="mb-3  service-tiitle">Explore Our Services</h1>
                </div>
                <div class="row "  >
                    <div class="col-lg-3 col-sm-6" >
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie  mb-4"></i>
                                <h5>Good Shopkeeper</h5>
                                <p>Our shopkeepers are helpful to porvide you good services and make savings. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 " >
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 product" viewBox="0 0 512 512" height="48px" width="48px">
                                    <path d="M326.3 218.8c0 20.5-16.7 37.2-37.2 37.2h-70.3v-74.4h70.3c20.5 0 37.2 16.7 37.2 37.2zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-128.1-37.2c0-47.9-38.9-86.8-86.8-86.8H169.2v248h49.6v-74.4h70.3c47.9 0 86.8-38.9 86.8-86.8z" fill="#FEA116"/>
                                </svg> 
                                <h5>Quality Product</h5>
                                <p>We provide quality full product with your budget and make you delightful</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 " >
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus  mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Get experience hassle-free with our user-friendly online ordering system</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-sm-6 " >
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 product" viewBox="0 0 512 512" height="48px" width="48px">
                                    <path d="M216 64c-13.3 0-24 10.7-24 24s10.7 24 24 24h16v33.3C119.6 157.2 32 252.4 32 368H480c0-115.6-87.6-210.8-200-222.7V112h16c13.3 0 24-10.7 24-24s-10.7-24-24-24H256 216zM24 400c-13.3 0-24 10.7-24 24s10.7 24 24 24H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H24z" fill="#FEA116"/>
                                </svg>                   
                                <h5> Service</h5>
                                <p>Our shop, quality meets creativity for  touch to your work and life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End at here -->

       


        <div class="container-xxl py-2">
            <div class="container  p-2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid "  style="width:100%;  height:auto"  src="img/about.jpg">
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start fw-normal">About Us</h5>
                        <h1 class="mb-4  service-tiitle">Welcome</h1>
                        <p class="mb-4">Our stationary shop caters clientele seeking top-notch writing tools and organizational essentials. Tempor erat elitr rebum at clita, where  shelves boast a carefully curated selection.</p>
                        <p class="mb-2">With a commitment to excellence, our shop aims to meet the demands of modern lifestyles, ensuring that every visit is a delightful experience for those.</p>
                        <a class="btn contact-button  py-1 px-3 mt-1" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div> 


        <?php include('components/displayProduct.php'); ?>
        



       
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center " >
                    <h5 class="section-title ff-secondary text-center">Contact us</h5>
                    <h1  class="service-tiitle">Contact for any query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div >
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6  col-sm-12  col-lg-6">
                                        <div class="form-floating">
                                            <input  id="contact-input" type="text"  p-1 contact_input" id="name" placeholder="Your Name">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email"   contact_input" id="email" placeholder="Your Email">    
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text"  id="subject" placeholder="Subject">
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea  style="resize:none; height:200px" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn contact-button w-100 py-2" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6" >
                        <iframe class="position-relative rounded w-100 h-100"
                            style="min-height: 350px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d542.7838257375842!2d90.42553537665485!3d23.76877400946025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2sEast%20West%20University!5e0!3m2!1sen!2sbd!4v1702295048400!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>


        <?php include('components/footer.php'); ?>



        <!-- all script cdn link -->

        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

        
    </body>
</html>