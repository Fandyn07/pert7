<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nilai1">Masukkan angka / nilai pertama:</label>
        <input type="number" id="nilai1" name="nilai1" required>
        
        <select id="operator" name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>
        
        <label for="nilai2">Masukkan angka / nilai kedua:</label>
        <input type="number" id="nilai2" name="nilai2" required>
        
        <input type="submit" value="Hitung">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST["nilai1"];
        $nilai2 = $_POST["nilai2"];
        $operator = $_POST["operator"];
        $hasil = 0;

        switch ($operator) {
            case "tambah":
                $hasil = $nilai1 + $nilai2;
                $operator_symbol = "+";
                break;
            case "kurang":
                $hasil = $nilai1 - $nilai2;
                $operator_symbol = "-";
                break;
            case "kali":
                $hasil = $nilai1 * $nilai2;
                $operator_symbol = "x";
                break;
            case "bagi":
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                    $operator_symbol = "/";
                } else {
                    echo "Maaf pembagian dengan nilai 0 tidak ada.";
                }
                break;
            default:
                echo "Coba lagi : Operator tidak valid.";
                break;
        }

        echo "<p>Hasil dari Perhitungan diatas :</p>";
        echo "<p>$nilai1 $operator_symbol $nilai2 = $hasil</p>";
    }
    ?>
</body>
</html>
