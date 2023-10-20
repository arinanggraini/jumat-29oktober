<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi String</title>
</head>
<body>
    <h1>Manipulasi String php</h1>
    <form action="" method="post">
        <label>Masukan Kata :</label>
        <br>
        <input type="text" name="cek_kata">
        <input type="submit" value="cek" name="cek">
        <br>
    </form>
    <?php
       if(isset($_POST["cek"])){
        $cek_string = $_POST['cek_kata'];
        echo "$cek_string <br>";
        echo "Jumlah karakter :".strlen($cek_string);
        echo "<br>";
        echo "Jumlah kata :".str_word_count($cek_string)."<br>";
        echo "Kebalikan :".strrev($cek_string)."<br>";
     } 
?>

    <h1>Operator Aritmatika</h1>
     <?php
       $angka1 =10;
       $angka2 =14;

       $tambah = $angka1 + $angka2;
       echo $tambah
 ?> 

</body>
</html>