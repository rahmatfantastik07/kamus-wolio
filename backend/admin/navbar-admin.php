<!-- File: navbar.php -->
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 999;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(6px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.navbar .menu {
    display: flex;
    gap: 20px;
    align-items: center;
}

.navbar .menu a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.navbar .menu a:hover {
    color: #007bff;
}

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 40px;
    left: 0;
    background-color: white;
    min-width: 160px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.dropdown-content a {
    display: block;
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.menu-toggle {
    display: none;
    cursor: pointer;
    font-size: 22px;
}

@media (max-width: 768px) {
    .navbar {
        flex-wrap: wrap;
    }

    .menu-toggle {
        display: block;
    }

    .menu {
        display: none;
        flex-direction: column;
        width: 100%;
        margin-top: 10px;
    }

    .menu.show {
        display: flex;
    }

    .dropdown:hover .dropdown-content {
        display: none;
    }

    .dropdown.open .dropdown-content {
        display: block;
        position: static;
    }
}
</style>

<nav class="navbar">
    <div class="logo">Kamus Daerah</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <div class="menu" id="nav-links">
        <a href="../../frontend/index.php">Beranda</a>


</nav>

<script>
function toggleMenu() {
    const nav = document.getElementById('nav-links');
    nav.classList.toggle('show');
}

function toggleDropdown(element) {
    if (window.innerWidth <= 768) {
        element.classList.toggle("open");
    }
}

// Scroll transparansi
window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>