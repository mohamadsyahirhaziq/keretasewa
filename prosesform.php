<?php
include('config.php');
$idsewa=$_POST['idsewa'];          //utk post
$namakereta=$_POST['namakereta'];       //data yg 
$noplat=$_POST['noplat'];
$namapenyewa=$_POST['namapenyewa'];                //dekat form
$noic=$_POST['noic'];     //masuk dlm
$tempohsewaan=$_POST['tempohsewaan'];                  //database

echo "<br>";     //baris baru

$query="insert into datasewa values                                
('$idsewa','$namakereta','noplat','$namapenyewa','$noic','$tempohsewaan')";//syntax utk masukkan data ke dlm db
if (mysql_query($query)){//syarat jika proses masukkan data berjaya, perkara di bwh akan jd

    header("location:datasewa.php");}//syntax utk pergi ke page yg dipilih 
else
	echo "ADA ERROR";//papar kan ADA ERROR di page
?>