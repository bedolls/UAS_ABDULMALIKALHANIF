<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama = $_POST['nama'];
$jumlah = $_POST['penulis'];
$kategori_id = $_POST['kategori_id'];
$gambar = $_POST['gambar'];

#3. menulis query
$simpan = "INSERT INTO tbl_brg (nama,jumlah,kategori_id,gambar) VALUES ('$nama','$jumlah','$kategori_id','$gambar')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
 header("location:index.php");
?>
<script>
    document.location="index.php";
</script>