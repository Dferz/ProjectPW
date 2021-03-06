<?php 
	include("php/cek_session.php");

	switch ($_SESSION['jenis']) {
		case 'admin':
			header("location: admin-page.php");
			break;
		case 'tentors':
			header("location: tentor-page.php");
			break;
	}
?>

<html>
	<head>
		<title>Simulasi-Soal</title>
		<link rel="shortcut icon" href="images/buku.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styleMain.css">
		<link rel="stylesheet" type="text/css" href="css/styleSimulasi.css">

		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery_profile.js"></script>
		
	</head>

	<body>
		<div class="page">
			<div id='wrapper'>
				<div id='header' class='fixed'>
					<div id='headerKiri'>
						<img id='logo' src="images/logo2.png">
					</div>

					<div id='headerTengah'>
						<ul>
							<h3><center>Solusi Meraih Prestasi</center></h3>
						</ul>
						<center>
							<div id='marquee'>
								<marquee>Dengan belajar sesungguhnya kita telah membuka satu pintu menuju kesuksessan</marquee>
							</div>
						</center>
						<span class='menuhead'><a href="main-page.php"><center>MainPage</center></span></a>
					</div>
					
					<div id='headerKanan'>
						<span class='welcome'>Welcome, <?php echo $_SESSION['login_user']; ?></span>
						<span class='menuLogout' style='margin-top:40px; border:none;'><center id='menuLogout'><img id='user_logo'src="php/cetak_gambar.php">
							<span style='padding-top: 10px; float:right'>&#9660;</span>
							<div id='menu_profile' class='hidden'>
								<center class='menu_logout'><a href="user-page.php"><span >Profile</span></a></center>
								<center class='menu_logout'><a href="php/logout.php"><span>SignOut</span></a></center>
							</div></center>
						</span>
						
						<div class='menuHeader'>
							<ul>
								<a href="index.php"><li><center>Home</center></li></a>
								<a href="FAQ.php"><li><center>FAQ</center></li></a>
								<a href="contact-us.php"><li style="border:none"><center>Contact Us</center></li></a>
							</ul>
						</div>
						<div id='borderatas' class='menuHeader' ></div>
						<div id='borderbawah' class='menuHeader' ></div>
					</div>
				</div>

				<div id='header'></div>

				<div id="simulasi-wrapper">
					<center>
						<div id='simulasi-box'>
							<h4>Score Anda adalah : <?php echo $_SESSION['score']?> dari 100 </h4>
							<h4>Sisa Waktu anda adalah : 
								<?php if($_COOKIE['time']==''){
									echo "Maaf Waktu Habis";
								}else{
									echo $_COOKIE['time']." Detik";
									//setcookie("time","100", time() + 1 *24 *3600);
								}?>
							</h4>

						</div>
					</center>
				
				</div>
					
				</div>
				
			
			<div class="footer">
				<div>
					<center><h3 style="color:rgba(210, 137, 23, 1)">Contact us on : </h3></br>
						<img src="images/fb.png" style="height:50px" title='Bimoli'>
						<img src="images/twitter.png" style="height:50px" title="@bimoliSolo">
						<img src="images/gmail.png" style="height:50px" title="bimoliSolo@gmail.com">
						<img src="images/phone.png" style="height:55px" title="0271-6756231">
					</center>
					<div style="font-family:Century Ghotic"></br></br><center>&copy created by Ig Donny, Achmad Kusyaini, Maulana Aziz & Tiyas Sulistyo</center></p></div>
				</div>
			</div>

		</div>
	</body>
</html>