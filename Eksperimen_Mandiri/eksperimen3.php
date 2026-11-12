<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 3 - Format Rupiah</title>
</head>
<body>
    <h1>Eksperimen Mandiri 3: Function Format Rupiah</h1>
    <?php
    // Function untuk format Rupiah
    function formatRupiah($angka) {
        return "Rp" . number_format($angka, 0, ",", ".");
    }

    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAwal = 150000;
    $hargaAkhir = hitungDiskon($hargaAwal, 10);

    echo "Harga awal: " . formatRupiah($hargaAwal) . "<br>";
    echo "Harga setelah diskon 10%: " . formatRupiah($hargaAkhir);
    ?>
</body>
</html>