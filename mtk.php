<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emteka</title>
</head>
<body>
    <h1>Matematika Dasar</h1>
    <form action="" method="post">
        <label for="nilai_a">Nilai A :</label>
        <input type="number" id="nilai_a" name="nilai_a"><br><br>
        <label for="nilai_b">Nilai B : </label>
        <input type="number" id="nilai_b" name="nilai_b"><br><br>
        <button type="submit">Hitung</button>
        <br>

        <?php
        if(isset($_POST['nilai_a']) && isset($_POST['nilai_b'])){
            $nilaiA = $_POST['nilai_a'];
            $nilaiB = $_POST['nilai_b'];
            echo "Hasil penjumlahan adalah".($nilaiA + $nilaiB)."<br>";
            echo "Hasil perkalian adalah".($nilaiA * $nilaiB)."<br>";
            echo "Hasil pengurangan adalah".($nilaiA - $nilaiB)."<br>";
            echo "Hasil pembagian adalah".($nilaiA / $nilaiB)."<br>";
        }
        ?>
    </form>
</body>
</html>