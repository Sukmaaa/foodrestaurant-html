<?php 
  $idMenu = $_GET['id_menu']; 
?>

<?php include './components/header.php' ?>

  <section class="margin" id="detail-menu">
    <div class="menu-container">
      <div class="box-about">
        <div class="detail-menu">
          <?php if($idMenu == 0) { ?>
            <div class="detail-menu-img">
              <img src="https://images.unsplash.com/photo-1525059696034-4967a8e1dca2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="" />
            </div>

            <div class="detail-menu-text">
              <h1>Chiken Burger With Tomato Sauce and Vegetables</h1>
              <br>
              <h2>Deskripsi Makanan</h2>
              <p>Chiken Burger ini adalah salah satu makanan best seller di Foodies dengan potongan ayam bagian dada yang sangat tender dan soft berbalut dengan tepung dan di goreng hingga golden brown, lalu di tambahkan dengan sayuran yang segar dan fresh serta di balut dengan Roti Bun yang semakin membuatnya menggugah selera.</p>
              <h2>Bahan-Bahan</h2>
              <ul>
                <li><p>1/2 sdm olive oil</p> </li>
                <li><p>1 bawang bombay, kupas dan cincang halus</p></li>
                <li><p>1 x kemasan 500g Ayam Potongan Dada</p></li>
                <li><p>1 sdt campuran bumbu kering</p></li>
                <li><p>1 butir telur, lalu kocok</p></li>
                <li><p>4 iris dadu Keju Cheddar matang</p></li>
                <li><p>Beberapa lembar daun selada bulat, sobek</p></li>
                <li><p>1 buah tomat, iris</p></li>
                <li><p>Saus tomat, untuk disajikan</p></li>
              </ul>
            </div>
          <?php } elseif ($idMenu == 1) { ?>

            <div class="detail-menu-img">
              <img src="https://images.unsplash.com/photo-1542574271-7f3b92e6c821?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" />
            </div>

            <div class="detail-menu-text">
              <h1>Special Beef Burger With Double Beef</h1>
              <br>
              <h2>Deskripsi Makanan</h2>
              <p>Special Beef Burger ini adalah salah satu makanan best seller di Foodies dengan potongan ayam bagian dada yang sangat tender dan soft berbalut dengan tepung dan di goreng hingga golden brown, lalu di tambahkan dengan sayuran yang segar dan fresh serta di balut dengan Roti Bun yang semakin membuatnya menggugah selera.</p>
              <h2>Bahan-Bahan</h2>
              <ul>
                <li><p>1/2 sdm olive oil</p> </li>
                <li><p>1 bawang bombay, kupas dan cincang halus</p></li>
                <li><p>1 x kemasan 500g Ayam Potongan Dada</p></li>
                <li><p>1 sdt campuran bumbu kering</p></li>
                <li><p>1 butir telur, lalu kocok</p></li>
                <li><p>4 iris dadu Keju Cheddar matang</p></li>
                <li><p>Beberapa lembar daun selada bulat, sobek</p></li>
                <li><p>1 buah tomat, iris</p></li>
                <li><p>Saus tomat, untuk disajikan</p></li>
              </ul>
            </div>
          <?php } else { ?>
            <div class="detail-menu-img">
              <img src="https://images.unsplash.com/photo-1606502973842-f64bc2785fe5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" style="height: 700px !important;" alt="" />
            </div>

            <div class="detail-menu-text">
              <h1>Chiken Fry Pack With Mayonnaise Sauce</h1>
              <br>
              <h2>Deskripsi Makanan</h2>
              <p>Chiken Burger ini adalah salah satu makanan best seller di Foodies dengan potongan ayam bagian dada yang sangat tender dan soft berbalut dengan tepung dan di goreng hingga golden brown, lalu di tambahkan dengan sayuran yang segar dan fresh serta di balut dengan Roti Bun yang semakin membuatnya menggugah selera.</p>
              <h2>Bahan-Bahan</h2>
              <ul>
                <li><p>1/2 sdm olive oil</p> </li>
                <li><p>1 bawang bombay, kupas dan cincang halus</p></li>
                <li><p>1 x kemasan 500g Ayam Potongan Dada</p></li>
                <li><p>1 sdt campuran bumbu kering</p></li>
                <li><p>1 butir telur, lalu kocok</p></li>
                <li><p>4 iris dadu Keju Cheddar matang</p></li>
                <li><p>Beberapa lembar daun selada bulat, sobek</p></li>
                <li><p>1 buah tomat, iris</p></li>
                <li><p>Saus tomat, untuk disajikan</p></li>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

<?php include './components/footer.php' ?>