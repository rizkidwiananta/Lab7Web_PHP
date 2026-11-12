<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1 - Rata-rata</title>
</head>
<body>
    <h1>Eksperimen Mandiri 1: Rata-rata Nilai</h1>
    <?php 
    $nama = "Siti"; 
    $tugas = 85; 
    $uts = 78; 
    $uas = 90; 

    // Perhitungan nilai akhir
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40); 
    
    // Perhitungan rata-rata
    $rataRata = ($tugas + $uts + $uas) / 3; 
     
    if ($nilaiAkhir >= 85) { 
        $predikat = "A"; 
    } elseif ($nilaiAkhir >= 75) { 
        $predikat = "B"; 
    } elseif ($nilaiAkhir >= 60) { 
        $predikat = "C"; 
    } else { 
        $predikat = "D"; 
    } 

    echo "Nama: " . htmlspecialchars($nama) . "<br>"; 
    echo "Nilai akhir (Bobot): " . number_format($nilaiAkhir, 2) . "<br>"; 
    echo "<strong>Nilai rata-rata: " . number_format($rataRata, 2) . "</strong><br>"; 
    echo "Predikat: " . $predikat; 
    ?>
</body>
</html>