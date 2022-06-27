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
  <link rel="stylesheet" type="text/css" href="./style.css">
  <!-- localcss -->
  <title>website</title>

</head>

<body >
<nav class="navbar navbar-expand-lg  sticky-top bg-info  navbar-light bg-nav" aria-label="Tenth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <p class="m-auto px-2">Sarfaraz Deshwali.</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    </svg>
    <div class="collapse navbar-collapse justify-content-end " id="navbarsExample08">
      <ul class="navbar-nav mx-md-auto me-5">

        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">Contact</a>
        </li> 
        <li class="nav-item mx-3">
          <a class="nav-link "  href="#">Skill</a>
        </li>
      </ul>
      <div class="text-end">
        <button type="button" class="btn btn-outline-dark me-3">Login</button>
        <button type="button" class="btn btn-warning me-1">Sign-up</button>
      </div>
    </div>
  </div>
 </nav>


<div class=" mainbg position-relative overflow-hidden shadow-lg d p-3 p-md-5 m-md-3 text-start">
  <div class="col-md-5 p-lg-5 bg-dark opacity-50 text-light me-auto my-5" style="padding-left: 30px; padding-top: 30px; padding-bottom: 20px ">
    <h1 class="display-4 fw-normal">Punny headline</h1>
    <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
    <a class="btn btn btn-outline-info " href="#">Coming soon</a>
  </div>
</div>


<div class="container px-4 py-5 border-bottom " id=" custom-cards">
  <h2 class=" fw-bold p-2 text-center mt-2 shadow-lg ">About.</h2>

  <div class="row row-cols-1 row-cols-lg-3 shadow-lg align-items-stretch g-4 py-3">
    <div class="col"style="height: 430px;">
      <div class="card1 card-cover h-100 overflow-hidden  bg-dark rounded-5 shadow-lg">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-3 mt-5 mb-4 display-6 lh-1 text-light fw-bold">Journey of Goles</h2>
          <ul class="d-flex list-unstyled fw-bold mt-auto">
           <!--  <li class="me-auto">
              <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
           </li>-->
           <li class="d-flex align-items-center me-3">
             <!--  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>-->
             <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
           </li>
             <!-- <li class="d-flex align-items-center">
                <small>3d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>

      <div class="col"style="height: 420px;">
        <div class="card2 card-cover h-100 overflow-hidden  bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3  text-shadow-1">
            <h2 class="pt-5 mt-4 mb-4 display-6 lh-1 text-light fw-bold">Hobies</h2>
            <ul class="d-flex list-unstyled mt-auto">
             <!--  <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
              </li> -->
              <li class="d-flex align-items-center me-3">
               <!--<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>  -->
               <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
             </li>
              <!--<li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>

      <div class="col"style="height: 420px;">
        <div class="card3 card-cover h-100 overflow-hidden bg-dark rounded-5 shadow-lg">
          <div class="d-flex border flex-column h-100 p-5 pb-3 text-shadow-1 ">
            <h2 class="pt-5 mt-4 mb-4 display-6 lh-1  text-light fw-bold">Blogs</h2>
            <ul class="d-flex list-unstyled mt-auto">
             <!-- <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32"> 
              </li>-->
              <li class="d-flex align-items-center me-3">
                <!--<svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg> -->
                <button type="button" class="btn btn-light opacity-75 fw-bold text-dark">Info</button>
              </li>
              <!--<li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="formthree mt-5">
    <div class="container shadow-lg"  style="background-color:#e8e8e8;">
        <div class="row  justify-content-center d-flex  fw-bold">
          <h1 class="fw-bold py-5 text-center">Contact Us</h1>
            <div class="col-md-8 col-md-offset-2 ">
                <form >
                    <div class="row px-5 ">
                        <div class="col-md-6 pb-3">
                            <div class="form-group"> <label class="sr-only">Name</label> <input type="text" class="form-control" required="" id="nameSix" placeholder="Your Name"> </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div class="form-group"> <label class="sr-only">Email</label> <input type="email" class="form-control" required="" id="emailSix" placeholder="Email Address"> </div>
                        </div>
                    </div>
                    <!--end of /.row-->
                    <div class="form-group py-4"> <label class="sr-only">Message</label> <textarea class="form-control" required="" rows="5" placeholder="Write Message"></textarea> </div>
                     <button type="submit" class="btn btn-primary mb-5">Send Message</button>
                </form>
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>



<div class="container mt-3 px-4" id="icon-grid">
    <h1 class="pb-2 fw-bold mt-5 text-center">Icon grid.</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
      <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <!-- <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <!--<svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg> -->
        <div>
          <h4 class="fw-bold mb-0 p-3">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <!-- <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg> -->
        <div>
          <h4 class="fw-bold p-3 mb-0">Featured title</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
  </div>




  <section class="p-2 text-center  bg-info">
        <footer class="text-center text-white">
          <!-- Grid container -->
          <div class="container">
            <!-- Section: Social media -->
            <section class="mb-2">
              <!-- Facebook -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

              <!-- Twitter -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>

              <!-- Google -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg></a>

              <!-- Instagram -->
              <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>

              
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class="text-center text-dark  p-2" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </footer>
      </section>
</body>
</html>
