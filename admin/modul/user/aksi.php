<?php
 error_reporting(0);
include "../../config/koneksi.php";

if($_POST['part']=='setting')
{

      $id_user = $_POST['id_user'];
      $nama_user = $_POST['nama_user'];
      $username = $_POST['username'];
      $password= md5($_POST['password']); 
      
$query = "UPDATE user SET 
    nama_user  = '$nama_user',
      username  = '$username',
      password  = '$password'
      WHERE id_user = '$id_user'" ;
$hasil = mysql_query($query);

//see the result
if ($hasil) {
?>
<script language="JavaScript">
alert('Proses Simpan Data Sukses, Silahkan Login Ulang Untuk Melanjutkan'); 
document.location='../../index2.php?part=Logout'</script>
  <?php
}
else{
  error_reporting();}

}
  ?>