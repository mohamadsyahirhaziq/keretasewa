<html>
<head><title>LAMAN RASMI SISTEM SEWAAN KERETA</title>
<style>
body
{
	font-family:arial;
	font-size:15;
	background-color: #f4b841;
}
#wraper
{
	width:1050px;
	margin:0 auto;
}
#header
{
	border:1px solid blue;
	height:250px;
}
#menu
{
	border:1px solid blue;
	background-color: #ccc;
}
#menu ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
#menu ul li
{
	list-style-type:none;
	margin:0;
	padding:0;
	display:inline-table;
}
#menu ul li:hover
{
	list-style-type:none;
	margin:0;
	padding:0;
	background-color:grey;
}
#menu ul li a
{
	list-style-type:none;
	margin:0;
	padding:0;
	text-decoration:none;
	display: block;
	line-height:40px;
	padding: 0 10px;
}
#kandungan
{
	border:1px solid blue;
	min-height:400px;
	padding:10px;
}
#footer
{
	border:1px solid blue;
	text-align:center;
	min-height:100px
	padding:10px;
	background-color: #ccc;
}


</style>
</head>
<body align="center">
<div id="wraper">
<div id="header">

<img src="keretasewa.jpg" alt="keretasewa" style="width:1048px;height:248px;"/>

</div>
<div id="menu">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ccc;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:blue}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<?php include('config.php');?>

<ul>
  <li><a href="index.php">UTAMA</a></li>
  
	<li class="dropdown">
	   <a href="javascript:void(0)" class="dropbtn">Kereta Sewa</a>
	       <div class="dropdown-content">
       <a href="datasewa.php">Data Sewaan Kereta</a>
       <a href="form.php">Tambah Sewaan Kereta</a>	   
	   
	   </div>

  </li>
</ul>

</body>
</div>

<div id="kandungan">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
. {display:none;}
</style>
<body>
<div class="w3-container">
<body>
<div class="w3-container">
<body>
<center>
<h1>Data Sewaan</h1>
<br>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2"><!--Ini utk bina table-->
<tr>
<td align="center" bgcolor="#f47a42"><strong>ID Sewaan</strong></td>             <!--Ini-->
<td align="center" bgcolor="#f47a42"><strong>Nama Kereta</strong></td>            <!--utk-->
<td align="center" bgcolor="#f47a42"><strong>Nombor Plat</strong></td>          
<td align="center" bgcolor="#f47a42"><strong>Nama Penyewa</strong></td>                  <!--papar-->
<td align="center" bgcolor="#f47a42"><strong>Nombor IC</strong></td>            <!--header-->
<td align="center" bgcolor="#f47a42"><strong>Tempoh Sewaan</strong></td>             <!--jadual-->
<td align="center" bgcolor="#f47a42" colspan="2"><strong>Tindakan</strong></td>      <!--data-->

</tr>

<?php
include('config.php');//utk connect db
$sql="SELECT * from datasewa ORDER BY idsewa";//SYNTAX utk tarik semua data ke dalam page ni
$result=mysql_query($sql)or die(mysql_error());
?>

<?php
while($row=mysql_fetch_array($result))
{//looping MULA
// ".$row["idnovel"]." == 123(idnovel)mcm kat bwh ;
// <a href='formupdate.php?idnovel=123'>Kemaskini</a>
    echo"<tr>
    <td>".$row["idsewa"]."</td>
    <td>".$row["namakereta"]."</td>
    <td>".$row["noplat"]."</td>
    <td>".$row["namapenyewa"]."</td>
    <td>".$row["noic"]."</td>
    <td>".$row["tempohsewaan"]."</td>
	<td>","<a href='formupdate.php?idsewa=".$row["idsewa"]."'>Kemaskini</a></td>"; //ni butang utk update data
?>

<td><input type="button" onClick="deleteme(<?php echo $row['idsewa']; ?>)" name="Delete" value="Delete"></td>
<!--Yg atas ni ^ butang utk delete data-->	 
<script language="javascript">
 function deleteme(delid)
 {//Yg bawah ni js confirmation utk delete data jika butang diatas ditekan;
 if(confirm("Anda Pasti Mahu Delete?")){
 window.location.href='prosdelete.php?del_id=' +delid+'';
 return true;
                                       }
 } 
 </script>
 
<?php }//looping TAMAT
echo"</table>";
?>
<br><br>
<a href="form.php">Tambah Sewaan Baharu</a>
<br><br><br><br><br><br><br><br><br><br><br><br>
</center>
</body>


<div class="bg"></div>
</div>
<div id="footer">
<h4>© Sistem Sewaan Kereta Copyright 2018</h4>
</div>
</div>


</html>