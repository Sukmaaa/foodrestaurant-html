
<?php 
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        header('Location:https://wa.me/+6281212825247/?text=Halo nama saya ' . $nama . '%0A%0A' . $pesan . '%0A%0A' . ' Sekian dari saya terima kasih.');
    }
?>

<?php include './components/header.php'; ?>

<section class="form-contact">
    <div class="form-container">
        <h1>Form Contact</h1>
        <form action="" method="post" autocomplete="off">
        <div class="txt_field">
            <input type="text" name="nama" placeholder="Nama" required>
            <span></span>
        </div>
        <div class="txt_field">
            <input type="email" name="email" placeholder="E-mail" required>
            <span></span>
        </div>
        <div class="txt_field">
            <textarea name="pesan" placeholder="Pesan" id="" cols="30" rows="10"></textarea>
            <span></span>
        </div>
        <button type="submit" name="kirim" class="btn-form">Kirim Pesan</button>
        <div class="signup_link"> </div>
        </form>
    </div>
</section>

<?php include './components/footer.php'; ?>