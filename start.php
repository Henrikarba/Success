<html>
<head>
    <script src="functions.js">	</script>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body onload='javascript:start_sizer();'>
    <?php
	    include'navbar2.php';
	?>
    <div id="popupboxLogin" class="popupbox"> 
		<form name="login" action="/Laphack2018/homepage.php" method="post">
			<center class="userpass">Username:</center>
			<center><input name="username" size="14" class="box" /></center>
			<br>
			<center class="userpass">Password:</center>
			<center><input name="password" type="password" size="14" class="box" /></center>
			<br>
			<center><input type="submit" name="submit" value="Login" class="login" /></center>
		</form>
		<center><a href="javascript:Login('hide');" class="close" >close</a></center> 
	</div> 
	<div id="popupboxRegister" class="popupbox"> 
		<form name="register" action="javascript:addNewUser();" method="post">
			<center class="userpass" >Username:</center>
			<center><input name="username" id="username_register" size="14" class="box" /></center>
			<br>
			<center class="userpass" >Password:</center>
			<center><input name="password" type="password" id="password_register" size="14" class="box" /></center>
			<br>
			<center><input type="submit" name="submit" value="Register" class="register"/></center>
		</form>
		<center><a href="javascript:Register('hide');" class="close" >close</a></center> 
	</div> 
	<div class="start_block0">
	   <img id="start_img0" src="Images/Backgrounds/5_interior.jpeg">
	</div>
	<div class="textpos">
	    <div id="transbox2">
            <p class="question">
                What is Success?
            </p>
            <p class="text">
                Success is reaching the destination.
            </p>
        </div>
    </div>
            <?php include'footer.php'; ?>
</body>
</html>