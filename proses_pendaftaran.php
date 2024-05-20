<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($_POST["nama"]); ?>!</h1>
    NIM: <?php echo htmlspecialchars($_POST["nim"]); ?><br>
    Email: <?php echo htmlspecialchars($_POST["email"]); ?><br>
    Tempat, Tanggal Lahir: <?php echo htmlspecialchars($_POST["tempat"]); ?>, <?php echo htmlspecialchars($_POST["ttl"]); ?><br>
    Alamat: <?php echo htmlspecialchars($_POST["alamat"]); ?><br>
    Gender: <?php echo htmlspecialchars($_POST["gender"]); ?><br>
</body>
</html>
