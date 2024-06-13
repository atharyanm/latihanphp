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
    <title>Halaman Index</title>
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
                <p><img src="img/cofee.jpg" class="img-thumbnail" alt="kopi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing <img src="img/cofee.jpg" class="rounded float-end" alt="kopi"> software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
