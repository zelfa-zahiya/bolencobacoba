<div class="max-w-4xl mx-auto">
    <!-- Header dengan Animasi -->
    <div class="text-center mb-6 animate-fade-in">
        <h1 class="text-2xl font-bold text-amber-900 animate-slide-up" style="animation-delay: 0.1s;">A'RaFFa - Bolen Bakar Bandung</h1>
        <div class="w-20 h-0.5 bg-amber-400 mx-auto mt-2 animate-scale-x" style="animation-delay: 0.2s;"></div>
    </div>

    <!-- Dua Poster dengan Animasi -->
    <div class="flex flex-col md:flex-row justify-center items-center gap-6 mb-6">
        <!-- Poster 1 - HANYA TAMBAH ZOOM -->
        <div class="w-64 bg-white rounded-xl shadow-md border border-amber-200 overflow-hidden transition-all duration-300 hover:shadow-lg animate-slide-left" style="animation-delay: 0.3s;">
            <div class="p-2 bg-amber-600 text-white text-center text-xs font-semibold">Poster A'Raffa</div>
            <!-- TAMBAHKAN overflow-hidden DAN class zoom PADA GAMBAR -->
            <div class="overflow-hidden">
                <img src="assets/images/poster_araffa.jpeg" 
                     alt="Poster A'Raffa" 
                     class="w-full h-auto transition-transform duration-300 hover:scale-105"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/250x300/amber/white?text=Poster+A\'Raffa';">
            </div>
        </div>
        
        <!-- Poster 2 - HANYA TAMBAH ZOOM -->
        <div class="w-64 bg-white rounded-xl shadow-md border border-amber-200 overflow-hidden transition-all duration-300 hover:shadow-lg animate-slide-right" style="animation-delay: 0.4s;">
            <div class="p-2 bg-amber-600 text-white text-center text-xs font-semibold">Poster Menu</div>
            <!-- TAMBAHKAN overflow-hidden DAN class zoom PADA GAMBAR -->
            <div class="overflow-hidden">
                <img src="assets/images/menu.jpeg" 
                     alt="Poster Menu" 
                     class="w-full h-auto transition-transform duration-300 hover:scale-105"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/250x300/amber/white?text=Poster+Menu';">
            </div>
        </div>
    </div>
    
    <!-- Tombol navigasi -->
    <div class="flex flex-wrap gap-4 justify-center mt-4">
        <a href="index.php?page=beranda" 
           class="bg-amber-100 hover:bg-amber-200 text-amber-800 font-semibold py-2 px-6 rounded-full transition-all duration-300 flex items-center gap-2 hover:shadow-lg animate-fade-in-left" 
           style="animation-delay: 0.6s;">
            <i class="fas fa-arrow-left text-xs"></i>
            <span>Kembali ke Company Profile</span>
        </a>
        <a href="index.php?page=ecommerce" 
           class="bg-amber-100 hover:bg-amber-200 text-amber-800 font-semibold py-2 px-6 rounded-full transition-all duration-300 flex items-center gap-2 hover:shadow-lg animate-fade-in-right" 
           style="animation-delay: 0.7s;">
            <span>Ke E-Commerce</span>
            <i class="fas fa-arrow-right text-xs"></i>
        </a>
    </div>
</div>

<!-- CSS Animasi -->
<style>
/* Animasi Dasar */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes scaleX {
    from {
        transform: scaleX(0);
        opacity: 0;
    }
    to {
        transform: scaleX(1);
        opacity: 1;
    }
}

/* Class Animasi */
.animate-fade-in {
    opacity: 0;
    animation: fadeIn 0.8s ease forwards;
}

.animate-slide-up {
    opacity: 0;
    animation: slideUp 0.6s ease forwards;
}

.animate-slide-left {
    opacity: 0;
    animation: slideLeft 0.6s ease forwards;
}

.animate-slide-right {
    opacity: 0;
    animation: slideRight 0.6s ease forwards;
}

.animate-fade-in-left {
    opacity: 0;
    animation: fadeInLeft 0.5s ease forwards;
}

.animate-fade-in-right {
    opacity: 0;
    animation: fadeInRight 0.5s ease forwards;
}

.animate-scale-x {
    animation: scaleX 0.5s ease forwards;
}

/* Hover Effects */
.hover\:shadow-lg:hover {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
}

/* ZOOM EFFECT - TANPA MENGUBAH UKURAN GAMBAR */
.overflow-hidden {
    overflow: hidden;
}

.transition-transform {
    transition-property: transform;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.duration-300 {
    transition-duration: 300ms;
}

.hover\:scale-105:hover {
    transform: scale(1.05);
}
</style>