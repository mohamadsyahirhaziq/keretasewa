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
<center>
<h1>Tambah Sewaan Baharu</h1>
<form name="form" method="post" action="prosesform.php"><!--Ini utk bukak form & tetapkan
                                                             tempat utk submit data-->

<input type='text' name='idsewa' value='' size='30' placeholder='ID Sewaan'>         <!--Ini-->
<br><br>
<input type='text' name='namakereta' value='' size='30' placeholder='Nama Kereta'>      <!--adalah-->
<br><br>
<input type='text' name='noplat' value='' size='30' placeholder='Nombor Plat'>    
<br><br>
<input type='text' name='namapenyewa' value='' size='30' placeholder='Nama Penyewa'>                <!--Form-->
<br><br>
<input type='text' name='noic' value='' size='30' placeholder='Nombor IC'>                         <!--untuk-->
<br><br>
<input type='text' name='tempohsewaan' value='' size='30' placeholder='Tempoh Sewaan'>           <!--input data-->
<br><br>
<input type="submit" name="submit">  <!--Yg ni utk submit data-->
</center>
</body> 



<div class="bg"></div>
</div>
<div id="footer">
<h4>© Sistem Sewaan Kereta Copyright 2018</h4>
</div>
</div>


</html>