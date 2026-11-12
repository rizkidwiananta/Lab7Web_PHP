<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 4 - Validasi NIM</title>
</head>
<body>
    <h1>Eksperimen Mandiri 4: Validasi NIM</h1>
    <p>NIM harus berupa angka dan tepat 9 digit.</p>

    <form method="POST" action="">
        <label for="nim">Masukkan NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <button type="submit">Cek NIM</button>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nim = trim($_POST["nim"] ?? "");
        
        // Validasi: harus angka dan panjangnya 9
        if ($nim === "") {
            echo "NIM tidak boleh kosong.";
        } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
            echo "<span style='color:red;'>NIM tidak valid! Pastikan hanya berisi angka dan tepat 9 digit.</span>";
        } else {
            echo "<span style='color:green;'>NIM valid: " . htmlspecialchars($nim) . "</span>";
        }
    }
    ?>
</body>
</html>