<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: #f9f9f9;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ffffff;
    padding: 15px 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 1000;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.85);
    /* tanpa blur */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.logo {
    font-weight: 600;
    font-size: 1.5em;
    color: #0f172a;
}

nav {
    display: flex;
    align-items: center;
    gap: 25px;
}

nav a {
    text-decoration: none;
    color: #1e293b;
    font-weight: 500;
    transition: color 0.3s ease, transform 0.3s ease;
    position: relative;
}

nav a:hover {
    color: #6366f1;
    transform: scale(1.05);
}

/* === Dropdown Styles === */
.nav-item {
    position: relative;
}

.nav-item>a::after {
    content: ' ▾';
    font-size: 0.8em;
}

.dropdown {
    position: absolute;
    top: 120%;
    left: 0;
    background-color: #fff;
    min-width: 180px;
    border-radius: 8px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    display: none;
    flex-direction: column;
    z-index: 999;
}

.dropdown a {
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    font-weight: 400;
    white-space: nowrap;
}

.dropdown a:hover {
    background-color: #f3f4f6;
    color: #4f46e5;
}

/* Tampilkan submenu saat hover */
.nav-item:hover .dropdown,
.nav-item:focus-within .dropdown {
    display: flex;
}

/* Tambahan transisi */
nav a,
.dropdown {
    transition: all 0.3s ease-in-out;
}

/* Hamburger menu */
.hamburger {
    display: none;
    font-size: 1.8em;
    cursor: pointer;
    color: #4f46e5;
}

/* === Responsif Mobile === */
@media (max-width: 768px) {
    nav {
        display: none;
        flex-direction: column;
        align-items: flex-end;
        background-color: #fff;
        position: absolute;
        top: 65px;
        right: 20px;
        width: 90%;
        max-height: 70vh;
        overflow-y: auto;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 10px;
        z-index: 1001;
    }

    nav.show {
        display: flex;
    }

    nav a {
        margin: 10px 0;
        width: 100%;
        text-align: right;
    }

    .dropdown {
        position: static;
        box-shadow: none;
        border-radius: 0;
        margin-left: 15px;
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .nav-item.open .dropdown {
        display: flex;
    }

    .nav-item>a::after {
        content: ' ▾';
    }

    .hamburger {
        display: block;
    }
}
</style>

<!-- === NAVBAR HTML === -->
<div class="navbar" id="navbar">
    <div class="logo">Kamus Wolio-Indonesia</div>
    <nav id="nav-links">
        <?php if (basename($_SERVER['PHP_SELF']) != 'index.php'): ?>
        <a href="index.php">Beranda</a>
        <?php endif; ?>

        <?php if (basename($_SERVER['PHP_SELF']) != 'keterangan.php'): ?>
        <a href="keterangan.php">Keterangan</a>
        <?php endif; ?>

        <?php if (basename($_SERVER['PHP_SELF']) != 'index.php#semua-kata'): ?>
        <a href="index.php#semua-kata">Semua Kata</a>
        <?php endif; ?>

        <a href="index.php#kata-hari-ini">Kata Hari Ini</a>

        <?php if (basename($_SERVER['PHP_SELF']) != 'diskusi.php'): ?>
        <a href="diskusi.php">Diskusi</a>
        <?php endif; ?>

        <!-- Dropdown Info -->
        <div class="nav-item" onclick="toggleDropdown(this)">
            <a href="javascript:void(0);">Sumber & Info</a>
            <div class="dropdown">
                <?php if (basename($_SERVER['PHP_SELF']) != 'penyusun.php'): ?>
                <a href="penyusun.php">Penyusun</a>
                <?php endif; ?>

                <?php if (basename($_SERVER['PHP_SELF']) != 'hak-cipta.php'): ?>
                <a href="hak-cipta.php">Hak Cipta</a>
                <?php endif; ?>

                <?php if (basename($_SERVER['PHP_SELF']) != 'prakata.php'): ?>
                <a href="prakata.php">Prakata</a>
                <?php endif; ?>

                <?php if (basename($_SERVER['PHP_SELF']) != 'kata-pengantar.php'): ?>
                <a href="kata-pengantar.php">Kata Pengantar</a>
                <?php endif; ?>

                <?php if (basename($_SERVER['PHP_SELF']) != 'instansi.php'): ?>
                <a href="instansi.php">Instansi</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="hamburger" onclick="toggleMenu()">☰</div>
</div>

<!-- === JS === -->
<script>
function toggleMenu() {
    const nav = document.getElementById('nav-links');
    nav.classList.toggle('show');
}

// Untuk klik dropdown saat di mobile
function toggleDropdown(element) {
    if (window.innerWidth <= 768) {
        element.classList.toggle("open");
    }
}

// Tambahkan efek transparan saat scroll
window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>