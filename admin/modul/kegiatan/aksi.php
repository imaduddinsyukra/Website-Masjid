<?php
 error_reporting(0);
include "../../config/koneksi.php";

if($_POST['part']=='add')
{

      $judul_kegiatan = $_POST['judul_kegiatan'];
      $keterangan = $_POST['keterangan'];
      date_default_timezone_set('Asia/Jakarta');
      $tanggal_artikel=date('Y-m-d');
      
$nama_file = $_FILES['gambar']['tmp_name']; 
$file_upload = $_FILES['gambar']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "../../img/galeri/$file"; 

if(move_uploaded_file("$nama_file","$folder"))
{ 
$query = "INSERT into kegiatan (tanggal_artikel, judul_kegiatan, keterangan, foto) values ('$tanggal_artikel','$judul_kegiatan','$keterangan','$folder')" ;
$hasil = mysql_query($query);
}
//see the result
if ($hasil) {
  ?>
<script language="JavaScript">
document.location='../../index2.php?part=Kegiatan'</script>
  <?php
}
else{
  error_reporting();}
  }
else if($_POST['part']=='edit')
{
    $id_kegiatan = $_POST['id_kegiatan'];
     $judul_kegiatan = $_POST['judul_kegiatan'];
      $keterangan = $_POST['keterangan'];
      date_default_timezone_set('Asia/Jakarta');
      $tanggal_artikel=date('Y-m-d');
      
$nama_file = $_FILES['gambar']['tmp_name']; 
$file_upload = $_FILES['gambar']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "../../img/galeri/$file"; 

if(move_uploaded_file("$nama_file","$folder"))
{ 
$query = "UPDATE kegiatan SET 
    tanggal_artikel  = '$tanggal_artikel',
      judul_kegiatan  = '$judul_kegiatan',
      keterangan  = '$keterangan',
      foto  = '$folder'
      WHERE id_kegiatan = '$id_kegiatan'" ;
$hasil = mysql_query($query);
}else{
  $query = "UPDATE kegiatan SET 
    tanggal_artikel  = '$tanggal_artikel',
      judul_kegiatan  = '$judul_kegiatan',
      keterangan  = '$keterangan'
      WHERE id_kegiatan = '$id_kegiatan'" ;
$hasil = mysql_query($query);
}
//see the result
if ($hasil) {
?>
<script language="JavaScript">
document.location='../../index2.php?part=Kegiatan'</script>
  <?php
}
else{
  error_reporting();}

}else if($_GET['part']=='hapus')
{
$id = $_GET['id'];
$query=mysql_query("DELETE from kegiatan where id_kegiatan='$id'");
if($query){
$_SESSION['id'] = "$id";
 ?>
<script language="JavaScript">
document.location='../../index2.php?part=Kegiatan'</script>
  <?php
}
else{
  error_reporting();}

}
  ?>