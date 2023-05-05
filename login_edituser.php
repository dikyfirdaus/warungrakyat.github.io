<?php 
 
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
        <?php //echo $_SESSION['error']?>
    </div>
 
    <div class="container">
	
	
        <form action="edit_user.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit User</p>
            <div class="input-group">
                <input type="email" placeholder="Ketikan Email" name="email" value="<?php //echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Ketikan max 10 huruf/angka Password" name="password" value="<?php //echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">EDIT</button>
			</div>
            <a href="index.php" class="btn btn-sm btn-danger">Exit</a
			<br/>
			<a href="login.php" class="btn btn-md btn-success">Login</a
        </form>
    </div>

</body>
</html>