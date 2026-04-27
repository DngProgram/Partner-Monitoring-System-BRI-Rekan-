<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BRI REKAN WEB</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image/x-icon" href="./images/bri-fav.png" />
</head>
<body>
<?php

$gambar = "./images/logo-baru.png";
$lebar = 350; // Lebar gambar dalam pixel
$tinggi = 180; // Tinggi gambar dalam pixel

?>
    <div class="bg-img">
        <div class="content">
            <img src="<?php echo $gambar; ?>" width="<?php echo $lebar; ?>" height="<?php echo $tinggi; ?>" alt="Gambar PHP"><br>
            
            <form action="./controller/proses_masuk_login.php" method="post">
                <br>
                <div class="input-box">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
            </form><br><br>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        
                    </div>
                </div>
    </footer>
        </div>
        
    </div>
    
</body>
</html>