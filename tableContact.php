
<?php 
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
?>

<?php include './components/header.php'; ?>

<section class="table-contact">
    <table>
        <tr>
            <th>Nama User</th>
            <th>E-mail</th>
            <th>Pesan</th>
        </tr>

        <tr>
            <td><?= $nama ?></td>
            <td><?= $email ?></td>
            <td width="300px"><?= $pesan ?></td>
        </tr>
    </table>
</section>


<?php include './components/footer.php'; ?>