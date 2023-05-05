<?php 
 
include('koneksidbs.php');
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
//$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");
$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' and password='$password'");
$row = mysqli_fetch_assoc($sql);
if ($row['username']==='spradmin') {?>
	<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Berhasil Login Sebagai Admin</title>
		</head>
		<body>
		<div class="container-logout">
        <form action="spradmin.php" method="POST" class="login-email">
            <?php echo "<h1>Anda Masuk Ke Mode, ". $row['username'] ."!". "</h1>"; ?>
			<div>
                  <label>NIK Anda</label>
				   <input type="text" name="nik" value=<?php echo $row['nik'];?> readonly class="form-control">
								  				
                </div>
             
            <div class="input-group">
			<button type="submit" class="btn btn-success">Masuk</button>
            
            </div>
			</form>
			</div>
			</body>
			</html>
			
	<?php die(); }
if (!isset($row['username'])) {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
		//header("Location: login.php");
    } else {
		$sql1 = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email'");
	$row1 = mysqli_fetch_assoc($sql1);
	$nik=$row1['nik'];
	//$sql2 = mysqli_query($koneksi,"SELECT * FROM users");
	//$row2 = mysqli_fetch_assoc($sql2);
	//if ($row1['email'] === 'dikyamik@gmail.com')
	if ($row['username']==='admin'){?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Berhasil Login Sebagai Admin</title>
		</head>
		<body>
		<div class="container-logout">
        <form action="admin.php" method="GET" class="login-email">
            <?php echo "<h1>Anda Masuk Ke Mode, ". $row1['username'] ."  ".$row1['kel']."!". "</h1>"; ?>
			<div>
                  <label>NIK Anda</label>
				   <input type="text" name="nik" value=<?php echo $row1['nik'];?> readonly class="form-control">
								  				
                </div>
             
            <div class="input-group">
			<button type="submit" class="btn btn-success">Masuk</button>
            
            </div>
			</form>
			</div>
			</body>
			</html>
	<?php }//$_SESSION['logged_in_user_id'] = '$nik';
			
	else {
		include 'koneksidbs.php';
		//echo $nik;
		$k=mysqli_query($koneksi,"select*from konsumen where nik='$nik'");
		$ks=mysqli_fetch_array($k);
		//echo $ks['nik'];
		echo empty($ks['nik']);
		
		if (!empty($ks['nik'])){ 
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Berhasil Login Sebagai Konsumen</title>
		</head>
		<body>
		<div class="container-logout">
        <form action="k1.php" method="GET" class="login-email" id="users">
            <?php echo "<h1>Selamat Datang, ". $row1['username'] ."!". "</h1>"; ?>
				<div>
                  <label>NIK Anda</label>
				   <input type="text" name="nik" value=<?php echo $row1['nik'];?> readonly class="form-control">			  				
                </div>
             
            <div class="input-group">
			<button type="submit" class="btn btn-success">Masuk</button>
            
            </div>
        </form>
		</div>
		</body>
		</html>
		
		<?php die();} else {
			?>
		
			<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Berhasil Login Sebagai Konsumen</title>
		</head>
		<body>
		<div class="container-logout">
        <form action="tambah_k1.php" method="GET" class="login-email" id="users">
            <?php echo "<h1>Bio Data belum tersedia, silakan isi terlebih dahulu"."!". "</h1>"; ?>
				<div>
                  <label>NIK Anda</label>
				   <input type="text" name="nik" value=<?php echo $row1['nik'];?> readonly class="form-control">			  				
                </div>
             
            <div class="input-group">
			<button type="submit" class="btn btn-success">Masuk</button>
            
            </div>
        </form>
    </div>
</body>
</html>
		<?php }?>		
  <?php  }?>
<?php  }?>
 


