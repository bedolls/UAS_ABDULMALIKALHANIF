<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nm_kategori = $_POST['nm_kategori'];


#3. menulis query
$sunting = "UPDATE tbl_kategori SET nm_kategori='$nm_kategori' WHERE id='$id'";

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