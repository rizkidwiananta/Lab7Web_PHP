<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 5 - Tombol Reset</title>
</head>
<body>
    <h1>Eksperimen Mandiri 5: Tombol Reset</h1>
    
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>
        
        <button type="submit">Kirim</button>
        <!-- Ini adalah tombol reset yang diminta -->
        <button type="reset">Reset</button> 
    </form>
    
    <br>
    <p><strong>Penjelasan:</strong><br>
    Tombol <b>Reset</b> hanya mengosongkan form di browser (client-side).<br>
    Sedangkan <b>Kirim</b> akan memproses data ke server. Jika halaman di-refresh setelah Kirim, data akan diproses ulang oleh server.</p>
</body>
</html>