<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 2 - Pencarian Array</title>
</head>
<body>
    <h1>Eksperimen Mandiri 2: Pencarian Nama dari Array</h1>
    
    <form method="GET" action="">
        <label for="kata">Cari Nama Mahasiswa:</label>
        <input id="kata" name="kata" type="text">
        <button type="submit">Cari</button>
    </form>
    <br>

    <?php
    $daftarMahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar"];

    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);
        
        if ($kata === "") {
            echo "Kata kunci tidak boleh kosong.";
        } else {
            echo "Hasil pencarian untuk: <strong>" . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "</strong><br><ul>";
            $ditemukan = false;
            
            // Mencari nama di dalam array
            foreach ($daftarMahasiswa as $nama) {
                if (stripos($nama, $kata) !== false) {
                    echo "<li>" . htmlspecialchars($nama) . "</li>";
                    $ditemukan = true;
                }
            }
            echo "</ul>";
            
            if (!$ditemukan) {
                echo "Nama tidak ditemukan.";
            }
        }
    }
    ?>
</body>
</html>