<!DOCTYPE html>
<html>
<head>
    <title>Hobi</title>
</head>
<body>
    <form action="soal2d.php" method="POST">
        <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_POST['nama']); ?>">
        <input type="hidden" name="umur" value="<?php echo htmlspecialchars($_POST['umur']); ?>">
        <label for="nama">Hobi Anda: </label>
        <input type="text" name="hobi">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>