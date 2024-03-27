<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>

    <h3>Materi Pemrograman PHP</h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>[1] Penggunaan IF</p>
        <p>[2] Penggunaan SWITCH..CASE</p>
        <p>[3] Penggunaan Looping</p>
        <p>[4] Penggunaan Array</p>
        
        <label for="material">Pilih Materi yang ingin anda pelajari :</label>
        <input type="number" id="material" name="material" min="1" max="4"><P>[1,2,3,4]</P>
        
        <input type="submit" value="Kirim">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $material = $_POST['material'];
        
        if ($material == 1) {
            header("Location: penggunaanIF.php");
            exit;
        } elseif ($material == 2) {
            header("Location: penggunaanSwitchCase.php");
            exit;
        } elseif ($material == 3) {
            header("Location: penggunaanLooping.php");
            exit;
        } elseif ($material == 4) {
            header("Location: penggunaanArray.php");
            exit;
        } else {
            echo "Hanya Pilih Angka 1 - 4!";
        }
    }
    ?>
    
</body>
</html>