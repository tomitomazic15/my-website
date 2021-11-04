<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tomi Tomažič</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="sass/style.css">
  <link rel="stylesheet"  href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="text-center">
  <div class="hero-page">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <!-- <nav class="nav nav-masthead navbar navbar-expand-lg fixed-top my_nav p-2"> -->
          <!-- <nav class="nav nav-masthead navbar navbar-expand-lg fixed-top my_nav p-2">
            <a class="nav-link mx-3 home-btn" href="#"><span style="font-size: 1.5em; color: white"><i class="fas fa-home"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <span style="font-size: 1.2em; color: white">
                  <i class="fas fa-bars"></i>
                </span>
              </span>
            </button>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
              <a class="nav-link mx-3 text-white" href="#about-me-link">ABOUT ME</a>
              <a class="nav-link mx-3 text-white" href="#projects-link">MY RECENT PROJECTS</a>
              <a class="nav-link mx-3 text-white" href="#contact-link">CONTACT</a>
            </div>
          </nav>
          </nav> -->
        </div>
      </header>
      <main role="main" class="inner cover">
        <h1 class="cover-heading hero-text">TOMI TOMAŽIČ</h1>
        <p class="lead hero-sub-text">FRONT END WEB DEVELOPER</p>
        <p class="lead hero-text">
          <a href="https://github.com/tomitomazic15" target="_blank" class="btn btn-lg hero-button">GITHUB</a>
        </p>
      </main>
      <footer class="mastfoot mt-auto"></footer>
    </div>
  </div>

  <div id="about-me-link" class="about-me p-5">
    <div class="row">
      <div class="col-md-6 col-sm-12" data-aos="fade-up">
        <img class="my-img" src="imgs/me.jpg" height="400px">
      </div>
      <div class="col-md-6 col-sm-12" data-aos="fade-up">
        <header class="about-header pb-5">
          ABOUT ME
        </header>
          <h2 class="about-h2">
            im a front end web developer from Slovenia,<br>
            i have a passion for creating easy to use and well thought out websites,<br>
            having a responsive layout and intuitive UX/UI is my highest priority.</h2>
      </div>
      <div class="col-md-6 col-sm-12 mt-5 pt-5" data-aos="fade-down">
        <h1 class="skills pb-3">FRONT END</h1>
        <img class="p-3" src="imgs/icons8-javascript-96.png"/>
        <img class="p-3" src="imgs/icons8-bootstrap-96.png"/>
        <br>
        <img class="p-3" src="imgs/icons8-vue-js-96.png"/>
        <img class="p-3" src="imgs/icons8-jquery-100.png"/>
      </div>
      <div class="col-md-6 col-sm-12 mt-5 pt-5" data-aos="fade-down">
        <h1 class="skills pb-3">BACK END</h1>
        <img class="p-3" src="imgs/icons8-php-logo-160.png"/>
        <img class="p-3" src="imgs/icons8-sql-96.png"/>
        <br>
        <img class="p-3" src="imgs/icons8-nodejs-96.png"/>
        <img class="p-3" src="imgs/icons8-python-96.png"/>
      </div>
    </div>
  </div>

  <div id="projects-link" class="my_carousel py-5">
    <header class="pb-5" data-aos="fade-down">MY RECENT PROJECTS</header>
    <div class="slideshow-container">
      <div class="mySlides">
        <a target="_blank" href="https://aaplus.si/"><img src="imgs/aaplus.PNG" style="width:100%"></a>
      </div>
      <div class="mySlides">
        <a target="_blank" href="https://auto2go.si/"><img src="imgs/auto2go.PNG" style="width:100%"></a>
      </div>
      <div class="mySlides">
        <a target="_blank" href="https://krojastvo-vogrinec.si/"><img src="imgs/vogrinec.PNG" style="width:100%"></a>
      </div>
      <div class="mySlides">
        <a target="_blank" href="https://vizualnestoritve.si/"><img src="imgs/kocka.PNG" style="width:100%"></a>
      </div>
      <div class="mySlides">
        <a target="_blank" href="https://www.spilliga.si/"><img src="imgs/spilliga.PNG" style="width:100%"></a>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>
  </div>

  <div id="contact-link" class="contact-form">
    <div class="container">
      <section>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-5 col-sm-12 pt-5">
            <h1 class="text-white">GET IN TOUCH</h1>
            <br>
            <p class="text-white float-left contact-sub pb-4">Interested in collaborating or starting a new project? don’t hesitate to contact me.</p>
            <br>
            <span style="color: white">
              <i class="fas fa-inbox"> mail@tomitomazic.eu</i>
            </span>
            <br>
            <span style="color: white">
              <i class="fas fa-mobile-alt"> 040 206 081</i>
            </span>
          </div>
          <div class=" col-lg-2 col-md-2"></div>
          <br>
          <div class="col-lg-5 col-sm-12">
            <form method="POST" data-form-title="CONTACT US" action="includes/contact.php">
              <input type="hidden" data-form-email="true">
              <div class="form-group">
                <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-block contact-button">CONTACT ME</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  
<footer class="page-footer font-small p-4">
  <div class="footer-copyright text-center text-white py-3">© 2020 Copyright Tomi Tomažič
  </div>
</footer>

  <script src="custom.js" async></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" async></script>
  <script src="jquery-3.5.1.js" async></script>
  <script src="bootstrap.min.js" async></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>