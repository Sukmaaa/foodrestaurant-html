  <?php 
    $dataMenu = file_get_contents("./assets/data/dataMenu.json");
    $data_menu = json_decode($dataMenu);
    $dataLayanan = file_get_contents("./assets/data/dataLayanan.json");
    $data_layanan = json_decode($dataLayanan);
  ?>
    <!-- HEADER -->

    <?php include './components/header.php';?>

    <!-- HOME -->

    <section class="home" id="home">
      <div class="home-text">
        <h1>Food Court</h1>
        <h2>
          Makanan Adalah <br />
          Hal Yang Paling Berharga
        </h2>
        <a href="#menu" class="btn">Menu Unggulan</a>
      </div>

      <div class="home-img">
        <img src="./assets/image/home.png" alt="" />
      </div>
    </section>

    <!-- ABOUT -->

    <section class="about" id="about">
      <div class="about-img">
        <img src="./assets/image/about.png" alt="" />
      </div>

      <div class="about-text">
        <span>Tentang Kami</span>
        <h2>
          Kami berbicara dengan <br />
          bahasa makanan yang baik
        </h2>
        <p>
          Foodies menyediakan makanan cepat saji dalam waktu pembuatan yang
          cepat dan memiliki rasa yang enak sehingga bisa langsung dinikmati
        </p>
        <a href="./detailMenu.php" class="btn">Pelajari lebih lanjut</a>
      </div>
    </section>

    <!-- MENU -->

    <section class="menu" id="menu">
      <div class="heading">
        <span>Menu Kami</span>
        <h2>Rasa yang mewah dan harga yang terjangkau</h2>
      </div>

      <div class="menu-container">
        <?php
          foreach($data_menu as $value){
        ?>
        <div class="box">
          <div class="box-img">
            <img src="./assets/image/<?= $value->img?>" alt="" />
          </div>
          <h2><?= $value->title?></h2>
          <h3><?= $value->desc?></h3>
          <span><?= $value->harga?></span>
          <i class="bx bx-cart-alt"></i>
        </div>
        <?php }; ?>
      </div>
    </section>

    <!-- PELAYANAN -->

    <section class="services" id="services">
      <div class="heading">
        <span>Pelayanan Kami</span>
        <h2>Kami selalu menyediakan makanan dengan kualitas terbaik</h2>
      </div>

      <div class="services-container">
        <?php 
          foreach($data_layanan as $value){
        ?>
          <div class="s-box">
            <img src="./assets/image/<?= $value->img ?>" alt="" />
            <h3><?= $value->title ?></h3>
            <p><?= $value->desc ?></p>
          </div>
        <?php
          }
        ?>
      </div>
    </section>

    <!-- HUBUNGI KAMI -->

    <section class="cta">
      <h2>
        Kami membuat makanan berkualitas <br />
        Setiap hari
      </h2>
      <a href="#contact" class="btn">Hubungi Kami</a>
    </section>

    <!-- FOOTER -->

    <?php include './components/footer.php'; ?>

    
