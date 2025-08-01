<?php include'navbar.php'?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kata Pengantar</title>
    <style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        display: flex;
        flex-direction: column;
    }

    .content-container {
        flex: 1;
        max-width: 800px;
        margin: 40px auto;
        padding: 20px 30px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        line-height: 1.8;
        text-align: justify;
    }

    .section-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .italic {
        font-style: italic;
        margin-top: 20px;
    }

    .author-info {
        margin-top: 30px;
        text-align: right;
    }

    footer {
        background-color: #004085;
        color: white;
        text-align: center;
        padding: 15px;
        font-size: 0.9rem;
    }
    </style>
</head>

<body>
    <!-- Konten -->
    <main class="content-container">

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>