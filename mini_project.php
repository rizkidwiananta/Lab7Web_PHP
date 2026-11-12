<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Data Mahasiswa</title>
</head>
<body>
    <h1>Formulir Data Mahasiswa</h1>

    <?php
    // ==========================================
    // BAGIAN 1: PEMROSESAN DATA (Kode dari Anda)
    // ==========================================
    $data = null;
    $error = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");
        $semesterInput = $_POST["semester"] ?? "";
        $email = trim($_POST["email"] ?? "");
        
        if ($nama === "") $error[] = "Nama wajib diisi.";
        if ($nim === "") $error[] = "NIM wajib diisi.";
        if ($prodi === "") $error[] = "Program studi wajib diisi.";
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Format email tidak valid.";
        }
        
        if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
            $error[] = "Semester harus berupa angka 1–14.";
        }
        
        if (!$error) {
            $data = compact("nama", "nim", "prodi", "email");
            $data["semester"] = (int)$semesterInput;
        }
    }
    ?>

    <!-- ========================================== -->
    <!-- BAGIAN 2: TAMPILAN PESAN ERROR             -->
    <!-- ========================================== -->
    <?php if (!empty($error)): ?>
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
            <strong>Terjadi Kesalahan:</strong>
            <ul>
                <?php foreach ($error as $pesan): ?>
                    <li><?= htmlspecialchars($pesan) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- ========================================== -->
    <!-- BAGIAN 3: FORM HTML                        -->
    <!-- ========================================== -->
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="prodi">Program Studi:</label><br>
        <input type="text" id="prodi" name="prodi" required><br><br>

        <label for="semester">Semester (1-14):</label><br>
        <input type="number" id="semester" name="semester" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <br><hr><br>

    <!-- ========================================== -->
    <!-- BAGIAN 4: TAMPILAN HASIL (JIKA VALID)      -->
    <!-- ========================================== -->
    <?php if ($data !== null): ?>
        <div style="border: 1px solid green; padding: 10px; background-color: #f0fff0;">
            <h3>Data Mahasiswa Diterima</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"]) ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"]) ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"]) ?></p>
            <p><strong>Semester:</strong> <?= htmlspecialchars((string)$data["semester"]) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"]) ?></p>
        </div>
    <?php endif; ?>

</body>
</html>