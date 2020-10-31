<?php 
include "admin/config/koneksi.php"; 
 
$nama_donatur=$_POST['nama_donatur']; 
$no_hp=$_POST['no_hp']; 

$nama_file = $_FILES['gambar']['tmp_name']; 
$file_upload = $_FILES['gambar']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "admin/img/donasi/$file"; 

if(move_uploaded_file("$nama_file","$folder"))
{ 
 $sql = "INSERT INTO donasi  
           ( 
              nama_donatur, 
              no_hp, 
              bukti_transfer 
           ) 
 
           VALUES  
           ( 
              '$nama_donatur',  
              '$no_hp', 
              '$folder' 
            )"; 
} 
$hasil=mysql_query($sql); 
if ($hasil)  
{ 
   echo "<script language='javascript'> 
            alert('Proses Berhasil'); 
            window.open('index.php','_top') 
         </script>"; 
 
}else{ 
 
   echo "<script language='javascript'> 
            alert('Proses Gagal'); 
            window.open('index.php','_top') 
         </script>"; 
   } 

 
?> 