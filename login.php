<?php 
session_id();
 session_start();
 //echo session_id();
include('koneksidbs.php');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
	
 
    <title>login</title>
</head>
<body>

    <div class="alert alert-warning" role="alert">
       
    </div>
 
    <div class="container" >
	
	
        <form action="login_aksi.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Ketikan Email" name="email" value="<?php //echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Ketikan max 10 huruf/angka Password" name="password" value="<?php //echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
			</div>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
			<a href="login_edituser.php" class="btn btn-sm btn-danger mr-1">Edit User</a>
			
			<a href="index.php" class="btn btn-sm btn-danger mr-1">Exit</a>
			<a href="konkel.php" class="btn btn-sm btn-danger">Users</a>
        </form>
    </div>

</body>
</html>