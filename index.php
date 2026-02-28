<?php
require_once 'config/constants.php';
include 'header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<?php if($page == 'home'): ?>
    <!-- Halaman AWAL - TANPA NAVBAR -->
    <div class="relative min-h-screen flex flex-col overflow-hidden">
        <!-- Logo dan Nama UMKM di pojok kanan dengan animasi -->
        <div class="absolute top-4 right-4 sm:top-6 sm:right-6 z-20 animate-slide-right">
            <div class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-3 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105">
                <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full overflow-hidden border-2 border-amber-300">
                    <img src="assets/images/logo_bolen.jpeg" 
                         alt="Logo A'Raffa" 
                         class="w-full h-full object-cover"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/40x40/amber/white?text=A';">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-amber-800 text-xs sm:text-sm leading-tight">A'Raffa</span>
                    <span class="text-[10px] sm:text-xs text-amber-600 leading-tight">Bolen Bakar</span>
                </div>
            </div>
        </div>

        <!-- Konten Utama dengan Animasi -->
        <main class="flex-1 flex items-center justify-center p-4 sm:p-6 md:p-8">
            <div class="relative w-full max-w-4xl mx-auto">
                <!-- Background Gambar dengan zoom slow animation -->
                <div class="absolute inset-0 z-0 rounded-3xl overflow-hidden">
                    <img src="assets/images/background.jpeg" 
                         alt="Background Bolen" 
                         class="w-full h-full object-cover opacity-30 animate-pulse-gentle"
                         style="animation-duration: 4s;"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/1200x800/amber/white?text=Bolen';">
                    <div class="absolute inset-0 bg-gradient-to-b from-white/10 to-white/20"></div>
                </div>
                
                <!-- Konten Teks dengan Animasi -->
                <div class="relative z-10 text-center py-12 sm:py-16 md:py-20 px-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-amber-900 mb-3 leading-tight animate-slide-left"
                        style="animation-delay: 0.2s;">
                        Toko Kue Bolen Bakar Bandung A'Raffa
                    </h1>
                    
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-amber-700 mb-8 sm:mb-10 font-medium animate-slide-right"
                       style="animation-delay: 0.4s;">
                        Bolen pisang lezat sejak 2018
                    </p>
                    
                    <a href="index.php?page=beranda" 
                       class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 sm:py-4 px-8 sm:px-10 rounded-full shadow-lg transition-all duration-300 text-base sm:text-lg hover:scale-105 hover:shadow-2xl animate-fade-in"
                       style="animation-delay: 0.6s;">
                        Lihat Selengkapnya
                        <!-- IKON PANAH TANPA ANIMASI (class animate-float dihapus) -->
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </main>
        
        <!-- Footer dengan Animasi -->
        <footer class="bg-amber-50/80 backdrop-blur-sm px-4 sm:px-6 md:px-8 py-3 sm:py-4 border-t border-amber-200 animate-slide-up"
                style="animation-delay: 0.8s;">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-2 text-amber-800 text-xs sm:text-sm">
                    <div class="text-center sm:text-left hover:text-amber-600 transition-colors">
                        <p class="font-semibold">A'Raffa – Bolen Bakar Bandung</p>
                    </div>
                    <div class="text-amber-600 hover:text-amber-700 transition-colors">
                        <p>© 2026 • Bolen pisang lezat sejak 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<?php else: ?>
    <!-- Halaman LAIN (beranda, ecommerce, poster) - PAKAI NAVBAR -->
    <?php include 'nav.php'; ?>
    
    <main class="p-4 sm:p-6 md:p-8 lg:p-10 animate-fade-in">
        <?php if($page == 'beranda'): ?>
            <?php include 'pages/company_profile.php'; ?>
        <?php elseif($page == 'ecommerce'): ?>
            <?php include 'pages/ecommerce.php'; ?>
        <?php elseif($page == 'poster'): ?>
            <?php include 'pages/poster_menu.php'; ?>
        <?php endif; ?>
    </main>
    
    <!-- Footer dengan Animasi -->
    <footer class="bg-amber-50 px-4 sm:px-6 md:px-8 py-4 border-t border-amber-200 animate-slide-up">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-2 text-amber-800 text-xs sm:text-sm">
                <div class="text-center sm:text-left hover:text-amber-600 transition-colors">
                    <p class="font-semibold">A'Raffa – Bolen Bakar Bandung</p>
                </div>
                <div class="text-amber-600 hover:text-amber-700 transition-colors">
                    <p>© 2026 • Bolen pisang lezat sejak 2018</p>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<!-- AOS Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>

</body>
</html>