import './bootstrap';
import 'bootstrap';
import '../scss/app.scss';

// Animasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    const fadeEl = document.querySelector('.animate-fade');
    const slideEl = document.querySelector('.animate-slide');

    // Tambahkan delay sedikit biar smooth
    setTimeout(() => {
        fadeEl?.classList.add('animate-show');
    }, 200);

    setTimeout(() => {
        slideEl?.classList.add('animate-show');
    }, 400);
});
