<?php 
include "../koneksi.php"; 
 
$nama_donatur=$_POST['nama_donatur']; 
$no_hp=$_POST['no_hp']; 

$nama_file = $_FILES['bukti_transfer']['tmp_name']; 
$file_upload = $_FILES['bukti_transfer']['name']; 
$file = str_replace (" ","_","$file_upload"); 
$folder = "foto/$file"; 
 
//kondisi pada saat proses SIMPAN data, kondisi file upload 
if(copy("$nama_file","$folder"))
{ 
 $sql = "INSERT INTO donasi  
           ( 
              id_jalan, 
              nama_donatur, 
              no_hp, 
              bukti_transfer 
           ) 
 
           VALUES  
           ( 
              null, 
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
            window.open('../index.php','_top') 
         </script>"; 
 
}else{ 
 
   echo "<script language='javascript'> 
            alert('Proses Gagal'); 
            window.open('../index.php','_top') 
         </script>"; 
   } 

 
?> 