 <?php
 echo("Hasil Konversi<br>");
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = floatval($_POST["nilai"]);
    $huruf = "";
    $numerik = 0.0;
    $kelulusan = "";

    if ($nilai >= 80.00 && $nilai <= 100.00) {
        $huruf = "A";
        $numerik = 4.00;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 76.25 && $nilai < 80.00) {
        $huruf = "A-";
        $numerik = 3.67;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 68.75 && $nilai < 76.25) {
        $huruf = "B+";
        $numerik = 3.33;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 65.00 && $nilai < 68.75) {
        $huruf = "B";
        $numerik = 3.00;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 62.50 && $nilai < 65.00) {
        $huruf = "B-";
        $numerik = 2.67;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 57.50 && $nilai < 62.50) {
        $huruf = "C+";
        $numerik = 2.33;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 55.00 && $nilai < 57.50) {
        $huruf = "C";
        $numerik = 2.00;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 51.25 && $nilai < 55.00) {
        $huruf = "C-";
        $numerik = 1.67;
        $kelulusan = "Lulus";
    } elseif ($nilai >= 43.75 && $nilai < 51.25) {
        $huruf = "D+";
        $numerik = 1.33;
        $kelulusan = "Tidak Lulus";
    } elseif ($nilai >= 40.00 && $nilai < 43.75) {
        $huruf = "D";
        $numerik = 1.00;
        $kelulusan = "Tidak Lulus";
    } elseif ($nilai >= 0.00 && $nilai < 40.00) {
        $huruf = "E";
        $numerik = 0.00;
        $kelulusan = "Tidak Lulus";
    } else {
        echo "<p>Nilai yang dimasukkan tidak valid. Harap masukkan nilai antara 0.00 dan 100.00.</p>";
        exit();
    }

    echo "<p>Nilai Angka: $nilai</p>";
    echo "<p>Nilai Huruf: $huruf</p>";
    echo "<p>Nilai Numerik Setara: $numerik</p>";
    echo "<p>Status Kelulusan: $kelulusan</p>";
} else {
    echo "<p>Tidak ada nilai yang dikirim.</p>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_piramida'])) {
    $tinggi = intval($_POST["tinggi"]);
    echo "<pre>";
    for ($baris = 1; $baris <= $tinggi; $baris++) {
        for ($i = 1; $i <= $tinggi - $baris; $i++) {
            echo " ";
        }
        for ($j = 1; $j < 2 * $baris; $j++) {
            echo "*";
        }
        echo "\n";
    }
    echo "</pre>";
}
?> 
