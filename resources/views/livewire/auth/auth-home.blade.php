<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
  
    <link rel="stylesheet" href="../../../dist/css/welcome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Linking SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
  <footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.facebook.com/ajsolerophotography"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/ajsolerophotography/?fbclid=IwY2xjawGDKFRleHRuA2FlbQIxMAABHY_qgFKqo1nTaCoWNNR49sANKmKDP5sTvYaiKlbIcMBjpgQaC_xJcwyxwg_aem_HpSvnrGK19MDPoeSSBVLwA"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.tiktok.com%2F%40ajsolero%3F_t%3D8qjGY819O1R%26_r%3D1%26fbclid%3DIwZXh0bgNhZW0CMTAAAR2XKVbrg6ML3n82-dJ_HvsKnIzeVUCJHFq_rbdSKYhK_mbm_o_nmZo10XY_aem_D9HhcjeIG9q62L1V10pp7A&h=AT2ncc_8TBQb5-ZUL6ocfgAPmfptr8Wn5qKZSZ_E2-OvmyLmN0EpQ9oPH7FAwFGHshdZIp3rzpzJnGW96gXxMhMafmf_4M6qCz4ocnPIxjHy4_e-pNufy-Fmtd7zzKCOPBolUg"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fyoutube.com%2F%40HappyIslanderTV%3Ffbclid%3DIwZXh0bgNhZW0CMTAAAR2XKVbrg6ML3n82-dJ_HvsKnIzeVUCJHFq_rbdSKYhK_mbm_o_nmZo10XY_aem_D9HhcjeIG9q62L1V10pp7A&h=AT0sZWD2_5gRFZDTIM-GTMb6_RJe1nklyH8HmKDaXjppET5JJeGraWmXAZfn4lqO9D_I7d96fCavEza3Z6d4TRHbxWCbQRZGeKh2_JW4X_AuXS1ngTcPR1GX6juJkfp3NX1F"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul><li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
        
    </div>
  
</footer>
</body>
</div>
