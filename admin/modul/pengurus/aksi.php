<?php
 error_reporting(0);
include "../../config/koneksi.php";

if($_POST['part']=='add')
{

  $nama_pengurus = $_POST['nama_pengurus'];
  $no_hp = $_POST['no_hp'];
  $jabatan = $_POST['jabatan'];     

$query = "INSERT into pengurus (nama_pengurus, no_hp, jabatan) values ('$nama_pengurus','$no_hp','$jabatan')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
  ?>
<script language="JavaScript">
document.location='../../index2.php?part=Susunan Pengurus'</script>
  <?php
}
else{
  error_reporting();}
  }
else if($_POST['part']=='edit')
{
      $nama_pengurus = $_POST['nama_pengurus'];
      $no_hp = $_POST['no_hp'];
      $jabatan = $_POST['jabatan'];     

$query = "UPDATE pengurus SET 
      nama_pengurus  = '$nama_pengurus',
      no_hp  = '$no_hp',
      jabatan = '$jabatan'
      WHERE id_pengurus = '$id_pengurus'" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
?>
<script language="JavaScript">
document.location='../../index2.php?part=Susunan Pengurus'</script>
  <?php
}
else{
  error_reporting();}

}else if($_GET['part']=='hapus')
{
$id = $_GET['id'];
$query=mysql_query("DELETE from pengurus where id_pengurus='$id'");
if($query){
$_SESSION['id'] = "$id";
 ?>
<script language="JavaScript">
document.location='../../index2.php?part=Susunan Pengurus'</script>
  <?php
}
else{
  error_reporting();}

}
  ?>