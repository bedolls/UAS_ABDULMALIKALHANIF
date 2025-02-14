<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nm_kategori = $_POST['nm_kategori'];
#3. menulis query
$simpan = "INSERT INTO tbl_kategori (nm_kategori) VALUES ('$nm_kategori')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
 header("location:index.php");
?>
<script>
    document.location="index.php";
</script>