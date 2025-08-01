<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 960px;
    margin: 40px auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    border-radius: 8px;
}

.container h2,
.container h3 {
    text-align: center;
    color: #333;
}

.container h3 {
    margin-top: 40px;
}

.image-wrapper {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.image-wrapper img {
    width: 100%;
    max-width: 100%;
    border-radius: 6px;
    transition: transform 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.image-wrapper img:hover {
    transform: scale(1.03);
}
</style>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2>Keterangan Tambahan</h2>

    <h3>Peta Fonem Konsonan</h3>
    <div class="image-wrapper">
        <img src="images/1.png" alt="Peta Fonem Konsonan">
    </div>

    <h3>Peta Fonem Vokal</h3>
    <div class="image-wrapper">
        <img src="images/2.png" alt="Peta Fonem Vokal" style="max-width: 500px;">
    </div>

    <h3>Peta Fonem Diftong</h3>
    <div class="image-wrapper">
        <img src="images/3.png" alt="Peta Fonem Diftong" style="max-width: 600px;">
    </div>

    <h3>Daftar Singkatan</h3>
    <div class="image-wrapper">
        <img src="images/4.png" alt="Daftar Singkatan" style="max-width: 300px;">
    </div>
</div>

<?php include 'footer.php'; ?>