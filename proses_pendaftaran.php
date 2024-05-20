<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_POST["nama"]; ?>!</h1>
    NIM: <?php echo $_POST["nim"]; ?><br>
    Email: <?php echo $_POST["email"]; ?><br>
    Tempat, Tanggal Lahir: <?php echo $_POST["tempat"]; ?>, <?php echo $_POST["ttl"]; ?><br>
    Alamat: <?php echo $_POST["alamat"]; ?><br>
    Gender: <?php echo $_POST["gender"]; ?><br>
</body>
</html>
