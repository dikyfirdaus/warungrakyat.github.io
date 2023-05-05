<?php 
include('koneksidbs.php');
 $email=$_POST['email'];
$password=$_POST['password'];
//$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");
$sql = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_assoc($sql);
	echo $row['username'];
if (!isset($row['username'])) {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
		
    } else {
		$sql1 = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email'");
	$row1 = mysqli_fetch_assoc($sql1);
	echo $row1['username'];
        //header("Location: berhasil_login.php");
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
   <?php }?>

 

 

 
