<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  
    <link rel="stylesheet" href="../../../dist/css/welcome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Linking SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <body>
  <nav>
    <div class="menu">
    
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('booking') }}">Booking</a></li>
        <li><a href="{{ route('login') }}">Log In</a></li>
      </ul>
    
    </div>
  </nav>
  <div class="img"></div>

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
          <a href="{{ route('portrait') }}" class="card-link">
            <img src="../../../dist/assets\img/portrait.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-developer">Portrait</p>
            <h2 class="card-title">This is the sample portrait of AjSolero</h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="{{ route('predebut') }}" class="card-link">
            <img src="../../../dist/assets\img/predebut.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-marketer">PreDebut</p>
            <h2 class="card-title">This is the beautiful sample of PreDebut capture of AjSolero </h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="{{ route('pre-nup') }}" class="card-link">
            <img src="../../../dist/assets\img/prenup.jpg" alt="Card Image" class="card-image">
            <p class="badge badge-gamer">PreNup</p>
            <h2 class="card-title">This is the sample PreNup capture of AjSolero</h2>
          </a>
        </li>
        <li class="card-item swiper-slide">
          <a href="{{ route('wedding') }}" class="card-link">
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
</div>
