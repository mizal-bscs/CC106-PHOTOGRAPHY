<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Home Page</title> 
    <link rel="stylesheet" href="../../../dist/css/welcome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Linking SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   </head>
<body>
  <nav>
    <div class="menu">
    
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Log In</a></li>
      </ul>
    
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">You Are Looking For Affordable And Beautiful Capture of Photos?</div>
    <div class="sub_title">Come And Try The AjSolero Photography.</div>

  </div>
  <div class="container swiper">
    <div class="card-wrapper">
      <!-- Card slides container -->
      <ul class="card-list swiper-wrapper">
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="../../../dist/assets\img/owner.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-designer">Owner</p>
            <h2 class="card-title">Aldrin Jacobo Solero is the one who will manage the AjSolero Photography.</h2>
            
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="../../../dist/assets\img/portrait.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-developer">Portrait</p>
            <h2 class="card-title">This is the sample portrait of AjSolero</h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="../../../dist/assets\img/predebut.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-marketer">PreDebut</p>
            <h2 class="card-title">This is the beautiful sample of PreDebut capture of AjSolero </h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="../../../dist/assets\img/prenup.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-gamer">PreNup</p>
            <h2 class="card-title">This is the sample PreNup capture of AjSolero</h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="#" class="card-link">
            <img src="../../../dist/assets\img/wedding.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-editor">Wedding</p>
            <h2 class="card-title">This is the sample wedding photo that capture of AjSolero</h2>
          </a>
        </li>
      </ul>
       <!-- Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Navigation Buttons -->
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>
  <!-- Linking SwiperJS script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Linking custom script -->
  <script src="../../../dist/js/homepage.js"></script>
</body>
</html>