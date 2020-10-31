<?php
 error_reporting(0);
include "../../config/koneksi.php";

if($_POST['part']=='add')
{

      $id_kriteria = $_POST['id_kriteria'];
      $nama_indikator = $_POST['nama_indikator'];

$query = "INSERT into indikator (id_kriteria, nama_indikator) values ('$id_kriteria','$nama_indikator')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
  ?>
<script language="JavaScript">
document.location='../../index2.php?part=Data Indikator'</script>
  <?php
}
else{
  error_reporting();}
  }
else if($_POST['part']=='edit')
{
      $id_indikator = $_POST['id_indikator'];
      $id_kriteria = $_POST['id_kriteria'];
      $nama_indikator = $_POST['nama_indikator'];     

$query = "UPDATE indikator SET 
      id_kriteria  = '$id_kriteria',
      nama_indikator  = '$nama_indikator'
      WHERE id_indikator = '$id_indikator'" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
document.location='../../index2.php?part=Data Indikator'</script>
  <?php
}
else{
  error_reporting();}

}else if($_GET['part']=='hapus')
{
$id = $_GET['id'];
$query=mysql_query("DELETE from indikator where id_indikator='$id'");
if($query){
$_SESSION['id'] = "$id";
 ?>
<script language="JavaScript">
document.location='../../index2.php?part=Data Indikator'</script>
  <?php
}
else{
  error_reporting();}

}
  ?>