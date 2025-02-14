<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nama =$_POST['nama'];
$jumlah =$_POST['jumlah'];
$kategori_id =$_POST['kategori_id'];
$gambar =$_POST['gambar'];

#3. menulis query
$sunting = "UPDATE tbl_brg SET nama='$nama', jumlah='$jumlah', kategori_id='$kategori_id', gambar='$gambar' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);
if (!$proses) {
    die("Query gagal di jalankan:". mysqli_error($koneksi));
}
#5. mengalihkan halaman
header("location:index.php");
exit();
?>
<script>
    document.location="index.php";
</script>