<!DOCTYPE html>
<html>
<head>
<title>Sistem Kalkulator</title>
<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
</head>
 <body bgcolor="#ffeb7a">
 	<center>
    <img src="pic 2.jpg" width="1367" height="300"  align="bottom">
    </center>

<center>
	<p><h3<strong><center>Register</center></strong></h3><br>
	<br>
	<br> 	
		<form id="form"name="form"method="post"action="signupprocess_user.php">
			<table width="400" border="1">
			
				<tr>
					<th scope="col">Username:</th>
					<th scope="col"><div align="left">
					<input type="text" name="username"value=""size="50"/>
				</div>
			</th>
		</tr>
		<tr>
					<th scope="col">Password:</th>
					<th scope="col"><div align="left">
					<input type="text" name="password"value=""size="50"/>
				</div>
			</th>
		</tr>
		
	</table>
	<br>
	<center><button type="submit"value="submit">Hantar</button>
		<button type="reset"value="reset">Isi Semula</button>
	</br>
</form>
</br>
</br>
<a href="login.php"target="-top">Kembali</a><br>
</center>
</form>
</p>

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
