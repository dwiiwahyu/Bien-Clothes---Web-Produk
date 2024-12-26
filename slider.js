let currentSlide = 0;
const slides = document.querySelectorAll(".slider-image");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
    });
}

function changeSlide(step) {
    currentSlide = (currentSlide + step + slides.length) % slides.length;
    showSlide(currentSlide);
}

// Event listener untuk tombol prev dan next
document.getElementById("prev").addEventListener("click", () => changeSlide(-1));
document.getElementById("next").addEventListener("click", () => changeSlide(1));
document.getElementById("next").addEventListener("click", () => changeSlide(1));
// Tampilkan slide pertama saat halaman dimuat
showSlide(currentSlide);
let slideIndex = 0;

// Fungsi untuk menampilkan slide berdasarkan indeks
function showSlides() {
    const slides = document.getElementsByClassName("slider-image");
    
    // Sembunyikan semua slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Atur slideIndex jika melebihi atau kurang dari batas
    if (slideIndex >= slides.length) { slideIndex = 0; }
    if (slideIndex < 0) { slideIndex = slides.length - 1; }

    // Tampilkan slide yang aktif
    slides[slideIndex].style.display = "block";
}

// Fungsi untuk mengubah slide berdasarkan langkah (n)
function changeSlide(n) {
    slideIndex += n;
    showSlides();
}

// Set interval untuk otomatis berpindah slide setiap 5 detik
setInterval(() => {
    slideIndex++;
    showSlides();
}, 5000); // 5000 ms = 5 detik

// Event listener untuk tombol prev dan next
document.getElementById("prev").addEventListener("click", () => changeSlide(-1));
document.getElementById("next").addEventListener("click", () => changeSlide(1));

// Tampilkan slide pertama saat halaman dimuat
showSlides();