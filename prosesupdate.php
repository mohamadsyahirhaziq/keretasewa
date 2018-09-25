 <?php

include ('config.php');//ini utk connect ke db

$query=mysql_query("UPDATE datasewa SET idsewa='$_POST[idsewa]',namakereta='$_POST[namakereta]',noplat='$_POST[noplat]',namapenyewa='$_POST[namapenyewa]',noic='$_POST[noic]',tempohsewaan='$_POST[tempohsewaan]' WHERE idsewa='$_POST[idsewa]'")or die (mysql_error());

if($query)
{
echo '<script>'; 
        echo 'alert("Pengemaskinian Berjaya!");'; 
        echo 'window.location.href= "datasewa.php";';/*untuk redirect ke page lepas salah*/
        echo '</script>';
}
else
{
	echo '<script>'; 
        echo 'alert("Pengemaskinian Tidak Berjaya!");'; 
        echo 'window.location.href= "datasewa.php";';/*untuk redirect ke page lepas salah*/
        echo '</script>';
}
mysql_close();
?>