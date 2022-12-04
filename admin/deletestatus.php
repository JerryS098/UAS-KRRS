<?php 
include 'koneksi.php';
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM status WHERE id='$id'");
 
if ($delete) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location = '/web/admin/status.php';</script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location = '/web/admin/status.php';</script>";
}
?>