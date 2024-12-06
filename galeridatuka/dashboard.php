<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB Galeri Datuka</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">WEB GALERI FOTO</a></h1>
        <ul>
            <li><a href="dashboard.php"><img src="img/dashbord.png" width="48px" style="margin-bottom:5px;" /></a></li>
            <li><a href="index.php"><img src="img/galeri.png" width="48px" style="margin-bottom:5px;" /></a></li>
            <li><a href="data-image.php"><img src="img/datafoto.png" width="50px" style="margin-bottom:5px;" /></a></li>
            <li><a href="profil.php"><img src="img/profil.png" width="48px" style="margin-bottom:5px;" /></a></li>
            <li><a href="Keluar.php"><img src="img/logout.png" width="38px" style="margin-bottom:5px;" /></a></li>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Website Galeri Foto</h4>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; Web Galeri Datuka.</small>
        </div>
    </footer>
</body>
</html>