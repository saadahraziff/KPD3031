<?php 

if(isset($_POST['nombor']))
{
$pertama = $_POST['pertama'];
$kedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
$hasil = $_POST['hasil'];

 switch ($operasi) {
    case 'tambah':
     $hasil = $pertama + $kedua;
    break;
   
   case 'tolak':
    $hasil = $pertama - $kedua;
   break;
   
   case 'darab':
    $hasil = $pertama * $kedua;
   break;
	
   case 'bahagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>KALKULATOR</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
  <link href="style.css" rel="stylesheet" type="text/css">
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
  background-color:  #ff5286;
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
  <li><a href="login.php">Laman Utama</a></li>
  <li><a class="active"href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>

  <center>
 <div class="kalkulator">
  <h3>KALKULATOR</h3>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="pertama" placeholder="Nombor Pertama"><br>
   <br>
   <input class="number" type="number" name="kedua" placeholder=" Nombor Kedua"><br>
   <br>
   operasi: <select class="option" name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
   </select>
   <br><br>
   <input type="submit" name="nombor" class="tombol" value="Hitung"><br>
   <br>
  </form>


  
  <?php if(isset($_POST['nombor'])){  ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="" class="number">
  <?php } ?> 
  <br>

</div></center>
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
