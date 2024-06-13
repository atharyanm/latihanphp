<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Biodata</title>
    <style>
        .profile-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
        }
        .bio {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: brown;">
                <br>
                <h1 style="text-align: center; color: white;">
                    <?php echo "Selamat datang, " . $_SESSION["username"] . "!"; ?>
                </h1>
                <br>
            </div>
            <div class="col-md-3" style="background-color:wheat">
                <ul>
                    <li><a href="masuk.php">Home</a></li>
                    <li><a href="biodata.php">Biodata</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="background-color: wheat">
                <div class="container">
                    <img src="img/profil.jpg" alt="Foto Profil" class="profile-image" height="200">
                    <div class="bio">
                        <h2>Nama: Ryan Atha Muyassar</h2>
                        <p>Umur: 19 tahun</p>
                        <p>Alamat: Jl. Grajegan No. 123</p>
                        <p>Pendidikan: S1 Sistem Informasi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="background-color: wheat">
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <form action="hapus.php" method="post" style="text-align: center; margin-top: 20px;">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</body>
</html>
