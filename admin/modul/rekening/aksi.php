<?php
 error_reporting(0);
include "../../config/koneksi.php";

if($_POST['part']=='add')
{

      $no_rek = $_POST['no_rek'];
      $nama_bank = $_POST['nama_bank'];
      
$query = "INSERT into bank (no_rek, nama_bank) values ('$no_rek','$nama_bank')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
  ?>
<script language="JavaScript">
document.location='../../index2.php?part=Rekening Bank'</script>
  <?php
}
else{
  error_reporting();}
  }
else if($_POST['part']=='edit')
{
    $id = $_POST['id'];
     $no_rek = $_POST['no_rek'];
      $nama_bank = $_POST['nama_bank'];
      
$query = "UPDATE bank SET 
    no_rek  = '$no_rek',
      nama_bank  = '$nama_bank'
      WHERE id = '$id'" ;
$hasil = mysql_query($query);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
document.location='../../index2.php?part=Rekening Bank'</script>
  <?php
}
else{
  error_reporting();}

}else if($_GET['part']=='hapus')
{
$id = $_GET['id'];
$query=mysql_query("DELETE from bank where id='$id'");
if($query){
$_SESSION['id'] = "$id";
 ?>
<script language="JavaScript">
document.location='../../index2.php?part=Rekening Bank'</script>
  <?php
}
else{
  error_reporting();}

}
  ?>