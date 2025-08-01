<?php include 'navbar.php'; ?>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    height: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    /* Vertikal tengah */
    align-items: center;
    /* Horizontal tengah */
    text-align: center;
    padding: 20px;
}

.header-identitas {
    background-color: #5f6162ff;
    color: #fff;
    padding: 20px;
    border-bottom: 2px solid #e5e7eb;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    width: 100%;
}

.header-identitas h1 {
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: #010101ff;
}

.header-identitas p {
    font-size: 0.95rem;
    color: rgba(251, 205, 0, 1);
    max-width: 600px;
    margin: 0 auto;
}

.ul {
    color: black;
    font-weight: bold;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.susun {
    font-size: 1.5em;
    display: block;
    margin-top: 10px;
}

footer {
    background: #1f2937;
    color: #f9fafb;
    text-align: center;
    width: 100%;
    padding: 30px 0;
    font-family: 'Inter', sans-serif;
    font-size: 0.95rem;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
}
</style>

<div class="wrapper">
    <div class="content">
        <div class="header-identitas">
            <h1>Kamus Bahasa Wolio</h1>
            <h3>Pusat Pembinaan dan Pengembangan<br> Bahasa Departemen Pendidikan<br> dan Kebudayaan</h3>
            <span class="susun">Disusun Oleh</span>
            <ul class="ul">
                <li>Husen Abas</li>
                <li>Shaidy</li>
                <li>Lukmanulhakini Jaya</li>
            </ul>
        </div>

        <h3 style="margin: 30px 0;">
            Pusat Pembinaan dan Pengembangan Bahasa<br>
            Departemen Pendidikan dan Kebudayaan<br>
            Jakarta<br>
            1985
        </h3>
    </div>

    <?php include 'footer.php'; ?>
</div>