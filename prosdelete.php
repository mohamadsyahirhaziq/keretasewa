<?php
include_once("config.php");//utk connect db
$select = "DELETE from datasewa where idsewa='".$_GET['del_id']."'";//syntax utk delete data yg  dipilih
$query = mysql_query($select) or die($select);
header ("Location: datasewa.php");//syntax utk pergi ke page yg dipilih selepas proses tamat
?>