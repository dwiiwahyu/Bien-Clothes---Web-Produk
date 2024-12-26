// Fungsi untuk menampilkan popup dengan gambar yang di-klik
function showPopup(element) {
    const popup = document.getElementById("imagePopup");
    const popupImg = document.getElementById("popupImg");
    popupImg.src = element.src;
    popup.style.display = "block";
}

// Fungsi untuk menutup popup
function closePopup() {
    const popup = document.getElementById("imagePopup");
    popup.style.display = "none";
}

// Tambahkan event listener untuk semua gambar produk
document.querySelectorAll(".product-image").forEach(img => {
    img.addEventListener("click", function () {
        showPopup(this);
    });
});

// Event listener untuk tombol close
document.getElementById("closeBtn").addEventListener("click", closePopup);

// Menutup popup jika pengguna mengklik di luar gambar
window.addEventListener("click", function(event) {
    const popup = document.getElementById("imagePopup");
    if (event.target == popup) {
        closePopup();
    }
});