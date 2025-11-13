<!DOCTYPE html>
<html>
<head>
    <title>Umur</title>
</head>
<body>
    <form action="soal2c.php" method="POST">
        <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_POST['nama']); ?>">
        <label for="nama">Umur Anda: </label>
        <input type="text" name="umur">
        <br>
        <input type="submit" value="submit">

    </form>

</body>
</html>