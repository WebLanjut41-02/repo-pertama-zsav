<?php
if (isset($_GET['submit'])) {
    $kelamin    = $_GET['jk'];
    $tb         = $_GET['tb']/100;
    $bb         = $_GET['bb'];
    $bmi        = $bb / ($tb * $tb);

    echo '<div class="hasil">';
    echo "<h3>Hasil perhitungan BMI</h3>";

    echo "Jenis kelamin: $kelamin<br>";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";
    if($bmi < 18) {

    }elseif ($bmi < 15 ) {
        echo "Anda mengalami kekurangan gizi";
    }elseif ($bmi < 25 ) {
        echo "Anda memiliki berat badan normal";
    }elseif ($bmi < 27 ) {
        echo "Anda memiliki overweight";
    }elseif ($bmi > 27 ) {
        echo "Anda mengalami Obesitas";

    }else {
        echo "Anda mengalami Obesitas Akut";
    }
    echo '</div>';
}
?>

<form    methot="get" action="">
Jenis kelamin<br>
<input type="radio" name="jk">laki<br>
<input type="radio" name="jk">cewe<br>
Tinggi badan (cm) <br>
<input type="text" name="tb"><br>
Berat badan (kg)<br>
<input type="text" name="bb"><br>
<input type="submit" name="submit" value="Hitung BMI">
</form>
</body>
</html>

