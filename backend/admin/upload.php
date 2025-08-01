<?php include '../../frontend/navbar.php'; ?>
<div style="max-width: 600px; margin: auto; padding: 50px;">
    <h2>Upload CSV Kamus Baru</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <label for="csv_file">Pilih file CSV:</label><br><br>
        <input type="file" name="csv_file" accept=".csv" required><br><br>
        <button type="submit">Upload dan Ganti Kamus</button>
    </form>
</div>
<?php include '../../frontend/footer.php'; ?>