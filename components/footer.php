<section id="contact">
  <div class="footer">
    <div class="main">
      <div class="col">
        <h4>Menu Links</h4>
        <ul>
          <li><a href="./index.php#home">Home</a></li>
          <li><a href="./index.php#about">Tentang</a></li>
          <li><a href="./index.php#menu">Menu</a></li>
          <li><a href="./index.php#services">Layanan</a></li>
          <li><a href="./index.php#contact">Hubungi Kami</a></li>
        </ul>
      </div>

      <div class="col">
        <h4>Informasi</h4>
        <ul>
          <li><a href="./index.php#about">Tentang Kami</a></li>
          <li><a href="./index.php#services">Informasi Pengiriman</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Syarat & Ketentuan</a></li>
        </ul>
      </div>

      <div class="col">
        <h4>Hubungi Kami</h4>
        <div class="social">
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100088685919273&mibextid=ZbWKwL"><i class="bx bxl-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/foodies2022_/?next=%2F&hl=id"><i class="bx bxl-instagram"></i></a>
          <a target="_blank" href="https://twitter.com/makandifoodies?t=Ptq7CPzRfd_Oqq4I1TG6ww&s=09"><i class="bx bxl-twitter"></i></a>
          <a target="_blank" href="https://www.youtube.com/channel/UCnVlSmBXeWab1SRXc0mGAKw"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS untuk responsive mobile di bagian navbar -->

<script type="text/javascript">
      let menu = document.querySelector('#menu-icon');
      let navbar = document.querySelector(".navbar");

      menu.addEventListener("click", function() {
        navbar.classList.toggle("active")
      });

      window.onscroll = () => {
        navbar.classList.remove("active")
      }
    </script> 
  </body>
</html>