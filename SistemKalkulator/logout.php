<!DOCTYPE html>
<html>
<head>
	<title>SISTEM KALKULATOR</title>
	<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #808000;
}

.active {
  background-color: #ff5286 ;
}
div {
  background-color: white;
  width: 300px;
  border: 15px grey;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
 <body bgcolor="#ffeb7a">

<center>
  <img src="pic 2.jpg" width="1367" height="300"  align="bottom">
</center>
 	<ul>
  <li><a  href="login.php">Laman Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a class="active" href="logout.php">Log Keluar</a></li>
</ul>
<br>
<br>
<center>
<?php
session_start();
session_destroy();
echo "Anda sudah log keluar!<br>
<br>
<a href=\"login.php\">Laman Utama</a>";
?>
<br>
<br>
</center>
<center>

        <label>Choose Your Background Colour :</label>
        <button type="button" onclick="changeBodyBg('#B4CFEC');">Pastel Blue</button>
        <button type="button" onclick="changeBodyBg('#FFCBA4');">Deep Peach</button>
        <button type="button" onclick="changeBodyBg('#E77471');">Light Coral</button>
         <button type="button" onclick="changeBodyBg('#ECC5C0');">Rose Gold</button>
        <button type="button" onclick="changeBodyBg('#E9CFEC');">Periwinkle</button>
    
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>
</body>
</html>
