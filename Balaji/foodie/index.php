<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap  -->

  <!-- localcss -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- localcss -->




  <title>Foodie.com</title>
</head>
<body>


  <!-- nav -->

  <nav class="navbar navbar-expand-lg  sticky-top bg-info  navbar-light bg-nav" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <p class="m-auto px-2">FooDie.</p>
      <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-shop-window " viewBox="0 0 16 16 ">
        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"/>
      </svg>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href=".\cotact.php">Contact</a>
        </li> <li class="nav-item">
          <a class="nav-link "  href="#">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- nav -->


<!-- slider -->

<div id="carouselExampleDark" class="carousel carousel-dark slide  "  data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://images.hdqwalls.com/download/donuts-minimalism-4k-t8-1366x768.jpg" class="d-block slide-img w-100"  alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img  src="https://images.hdqwalls.com/download/minion-bananas-1366x768.jpg" class="d-block slide-img w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.hdqwalls.com/download/bicycle-minimalism-4k-1366x768.jpg" class="d-block slide-img w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- slider -->
<hr>

<!-- h1 -->
<div class=" text-center mx-auto pt-3"> <h1 class="fw-bolder"> Our Product.</h1></div>
<!-- h1 -->


<!-- card -->

<div class="album py-5">
  <div class="container d-flex">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 px-4 m-auto">


     <div class="col">
       <div class="card" style="width: 18rem;">
        <img src="https://images.hdqwalls.com/wallpapers/bthumb/hot-spicy-burger-ys.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Fast Food</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="button" href=""> Explore
</button>
        </div>
      </div>
    </div>



    <div class="col ">
     <div class="card" style="width: 18rem;">
      <img src="https://images.hdqwalls.com/wallpapers/bthumb/coffee-beside-coffee-beans-pp.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Coffee</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <button class="button" href="" >  Explore
</button>
      </div>
    </div>
  </div>


  <div class="col">
   <div class="card" style="width: 18rem;">
    <img src="https://images.hdqwalls.com/wallpapers/bthumb/smoothie-food-8k-3w.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cold Drink</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <button class="button" href="" >  Explore
</button>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- card -->


<!-- new add -->

<div class=" text-center  w-50 py-5 m-auto">
  <div  class="container">
    <div  class="justify-content-center mb-lg-5">
      <div class="col-lg-9 mb-5 mb-lg-0 text-center m-auto">
        <div  class="badge bg-primary-soft text-primary fw-500 mb-2">Now available!
        </div>
        <h1  class="display-4 fw-600 fw-bolder mb-3">DESI TADKA</h1>

        <p class="lead mb-4">Contact forms can be tricky, so we built
         <strong class="text-dark">Start Bootstrap Forms. </strong>In minutes, you can set up your form and start getting form submissions straight to your inbox.</p>

        <button class="cta pb-2">
  <span class="px-2 " href="">Try this.</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
       </div>
     </div>
   </div>                                                                                                
 </div>
</div> 

<!-- new add -->


<!-- big card -->

<hr class="featurette-divider">
<div class="row featurette p-5">
  <div class="col-md-7">
    <h2 class="featurette-heading pb-3">Desert Delighte . <span class="text-muted">It’ll blow your mind.</span></h2>
    <p class="lead">Here at Delish, we're of the mindset that life's not worth living without dessert. <br>"Cookies are made of butter and love."<br>"Life is uncertain. Eat dessert first."
  </div>
  <div class="col-md-5">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://i.pinimg.com/originals/0a/65/e7/0a65e70000192b80bf7cdf0b29e9d65a.jpg"><title>Placeholder</title>

  </div>
</div>
<hr class="featurette-divider">

<div class="row featurette p-5">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading pb-3">Spices, it’s that good. <span class="text-muted">See your patience.</span></h2>
    <p class="lead">Variety is what I would recommend: As variety is the spice of life in food, so it is in exercise. Change it up. But most of all, don't overdo it.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://bestlifeonline.com/wp-content/uploads/sites/3/2019/07/spicy-food-1.jpg?fit=1200%2C800&ssl=1"><title>Placeholder</title>

  </div>
</div>  


<hr class="featurette-divider">
<div class="row featurette p-5">
  <div class="col-md-7">
    <h2 class="featurette-heading pb-3">Rajasthani jams. <span class="text-muted">It’ll blow your mood.</span></h2>
    <p class="lead">Rajasthan is the state of the Royals, Famous for Culture, Palaces and Especially Rajasthani Food, 🍲check out the must have Food of Rajasthan.</p>
  </div>
  <div class="col-md-5">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://www.adotrip.com/public/images/blogs/master_images/60ed723c9ea0f-Cover_Image_Blog.jpg"><title>Placeholder</title>

  </div>
</div>
<!-- big card -->


<!-- big 2 card -->


<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
  <div class=" text-light bg-dark me-md-3 pt-3 px-5 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-body shadow-sm mx-auto" style="width: 90%; height: 300px; border-radius: 21px 21px 0 0; background-repeat: no-repeat; background-size:cover; background-position:top;  background-image: url(https://www.vegetariantastebuds.com/wp-content/uploads/2020/10/NAVRATRI-VRAT-FASTING-MEAL-IDEAS-1.png);"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class=" me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class=" my-3 p-3">
        <h2 class="ok display-5 ">Festiwal jam's</h2>
        <p class="ok lead">Find your taste.</p>
      </div>
    </div>

    <div class=" text-light bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-repeat: no-repeat; background-size:cover; background-position:top;  background-image: url(https://www.vegetariantastebuds.com/wp-content/uploads/2020/10/NAVRATRI-VRAT-FASTING-MEAL-IDEAS-1.png);"></div>
    </div>
  </div>

  <!-- big 2 card -->


  <div>
  </div>
</div> 
<hr>
<section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase pt-5">About</h2>
      <h3 class="section-subheading text-muted">State's food explore .</h3>
    </div>
    <ul class="timeline text-center py-5">
      <li class="py-3">
        <div class="timeline-image "><img class="rounded-circle img-fluid" style="height: 140px; width: 150px " src="https://img.etimg.com/thumb/msid-74572648,width-640,resizemode-4,imgsize-246114/people-say-no-to-non-veg.jpg" alt="..."></div>
        <div class="timeline-panel ">
          <div class="timeline-heading">
            <h4>.</h4>
            <h4 class="subheading">Non-Veg</h4>
          </div>
          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
        </div>
      </li>
      <li class="timeline-inverted py-3">
        <div class="timeline-image"><img class="rounded-circle img-fluid" style="height: 140px; width: 150px" src="https://i0.wp.com/www.TheSaffronStrands.com/wp-content/uploads/2020/06/PSX_20200628_154026.jpg?resize=709%2C640" alt="..."></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>.</h4>
            <h4 class="subheading">Rajasthani Thaal</h4>
          </div>
          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
        </div>
      </li>
      <li class="py-3">
        <div class="timeline-image"><img class="rounded-circle img-fluid"  style="height: 140px; width: 150px" src="https://i2.wp.com/cravingsunlimited.com/wp-content/uploads/2020/10/New-Punjab.jpg?fit=1600%2C1066&ssl=1" alt="..."></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>.</h4>
            <h4 class="subheading">Bengoli Meal</h4>
          </div>
          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
        </div>
      </li>
      <li class="timeline-inverted py-3">
        <div class="timeline-image"><img class="rounded-circle img-fluid"   style="height: 140px; width: 150px"  src="https://yennadosa.com/wp-content/uploads/2018/12/radhikashomepagefinal.jpg" alt="..."></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4>.</h4>
            <h4 class="subheading">South Food</h4>
          </div>
          <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
        </div>
      </li>
      <li class="timeline-inverted py-3">
        <div class="timeline-image">
          <h4>
            Be Part
            <br>
            Of Our
             Story!
          </h4>
        </div>
      </li>
    </ul>
  </div>
</section></div>



<footer class="footer py-2 bg-info">
            <div class="container">
                <div class="row align-items-center" style="justify-content: center;text-align: center;">
                    <div class="col-lg-4 text-lg-start">Copyright © Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0" >
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style=" width:25px:; height:25px;" ><path  fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg><!-- <i class="fab fa-twitter"></i> Font Awesome fontawesome.com --></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""  style=" width:25px:; height:25px;" ><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg><!-- <i class="fab fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><svg class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""  style=" width:25px:; height:25px;" ><path fill="currentColor" d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path></svg><!-- <i class="fab fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
