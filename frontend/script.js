const hasilContainer = document.getElementById("hasil");
const searchInput = document.getElementById("search");

function tampilkanData(data) {
  hasilContainer.innerHTML = "";
  if (data.length === 0) {
    hasilContainer.innerHTML = "<p>Tidak ada hasil.</p>";
    return;
  }

  data.forEach((item) => {
    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
      <h2>${item.kata}</h2>
      <p><strong>Arti:</strong> ${item.arti}</p>
      ${item.contoh ? `<p><strong>Contoh:</strong> ${item.contoh}</p>` : ""}
    `;
    hasilContainer.appendChild(card);
  });
}

function fetchData(keyword = "") {
  let url = "http://localhost/kamus-wolio/backend/api/get_kata.php";
  if (keyword !== "") {
    url = `http://localhost/kamus-wolio/backend/api/cari_kata.php?q=${encodeURIComponent(
      keyword
    )}`;
  }

  fetch(url)
    .then((response) => response.json())
    .then((data) => tampilkanData(data))
    .catch((error) => console.error("Gagal fetch:", error));
}

// Tampilkan semua saat pertama kali
fetchData();

// Cari ketika diketik
searchInput.addEventListener("input", (e) => {
  const keyword = e.target.value;
  fetchData(keyword);
});


<script>
  const navToggle = document.getElementById('navToggle');
  const navMenu = document.getElementById('navMenu');

  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
</script>
