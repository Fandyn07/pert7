<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret bilangan</title>
</head>
<body>
    <h3>DERET BILANGAN GANJIL YANG HABIS DIBAGI 3</h3>
    <form method="post" action="">
        <label for="nilai_awal">Nilai Awal:</label>
        <input type="number" id="nl" name="nl" required>
        <br><br>
        <label for="nilai_akhir">Nilai Akhir:</label>
        <input type="number" id="nr" name="nr" required>
        <br><br>
        <input type="submit" name="h" value="Hitung">
    </form>

    <?php
    function GB3($angka) {
        return ($angka % 2 !== 0 && $angka % 3 === 0);
    }


    $nl = isset($_POST['nl']) ? $_POST['nl'] : null;
    $nr = isset($_POST['nr']) ? $_POST['nr'] : null;


    if (isset($_POST['h'])) {
        if ($nl !== null && $nr !== null) {
            $td = 0; //Total
            $jd = 0; //Jumlah
            $deret = ""; //Output

            for ($i = $nl; $i <= $nr; $i++) {
                if (GB3($i)) {
                    $td += $i;
                    $jd++;
                    $deret .= ($deret == "") ? $i : ", " . $i;
                }
            }

            if ($jd > 0) {
                $numbers = explode(", ", $deret);
                $sum_display = implode(" + ", $numbers);
                echo "<p>Maka deret bilangan yang tampil: $deret</p>";
                echo "<p>Jumlah Bilangan: $jd</p>";
                echo "<p>Jumlah nilai bilangan : $sum_display = $td</p>";
            } else {
                echo "<p>Tidak ada bilangan yang memenuhi kriteria.</p>";
            }
        } else {
            echo "<p>Silakan masukkan nilai awal dan nilai akhir terlebih dahulu.</p>";
        }
    }
    ?>
</body>
</html> 
