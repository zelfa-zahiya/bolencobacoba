<div class="max-w-4xl mx-auto">
    <!-- Header dengan Animasi Fade In -->
    <div class="text-center mb-8 animate-fade-in">
        <h1 class="text-3xl md:text-4xl font-bold text-amber-900 mb-2">A'RAFFA</h1>
        <div class="w-20 h-0.5 bg-amber-400 mx-auto my-2 animate-scale-x"></div>
        <p class="text-lg md:text-xl text-amber-700 animate-slide-up" style="animation-delay: 0.1s;">E-Commerce</p>
        <p class="text-sm md:text-base text-amber-600 mt-1 animate-slide-up" style="animation-delay: 0.2s;">Belanja produk bolen favorit Anda</p>
    </div>
    
    <!-- Product Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-10">
        <?php 
        // Daftar produk
        $products = [
            [
                'name' => 'Pisang Coklat Keju', 
                'price' => 4000, 
                'desc' => 'Perpaduan coklat dan keju yang lezat',
                'image' => 'assets/images/bolen_coklat_keju.jpeg'
            ],
            [
                'name' => 'Pisang Coklat', 
                'price' => 4000, 
                'desc' => 'Coklat meleleh dengan pisang manis',
                'image' => 'assets/images/bolen_coklat.jpeg'
            ],
            [
                'name' => 'Pisang Keju', 
                'price' => 4000, 
                'desc' => 'Keju gurih dengan pisang pilihan',
                'image' => 'assets/images/bolen_keju.jpeg'
            ]
        ];
        
        $index = 0;
        foreach ($products as $product): 
        ?>
        <!-- Setiap produk -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-amber-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col h-full animate-slide-up" style="animation-delay: <?= 0.3 + ($index * 0.15) ?>s;">
            <!-- Gambar Produk -->
            <div class="h-44 sm:h-48 bg-amber-100 relative overflow-hidden flex-shrink-0 group">
                <img src="<?= $product['image'] ?>" 
                     alt="<?= $product['name'] ?>"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/300x200/amber/white?text=<?= urlencode($product['name']) ?>';">
                <div class="absolute inset-0 bg-amber-900/0 group-hover:bg-amber-900/10 transition-all duration-300"></div>
            </div>
            
            <!-- Konten Produk -->
            <div class="p-4 text-center flex flex-col flex-grow">
                <h3 class="text-lg font-bold text-amber-900 mb-1"><?= $product['name'] ?></h3>
                <p class="text-xs sm:text-sm text-amber-600 mb-2 min-h-[40px]"><?= $product['desc'] ?></p>
                <p class="text-xl font-bold text-amber-700 mb-3">Rp <?= number_format($product['price'], 0, ',', '.') ?></p>
                
                <!-- Tombol Pesan - SEKARANG BISA DIPENCET -->
                <div class="mt-auto">
                    <button onclick="orderViaWA('<?= $product['name'] ?>', <?= $product['price'] ?>)" 
                            class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 flex items-center justify-center gap-2 text-sm sm:text-base hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] cursor-pointer">
                        <i class="fab fa-whatsapp text-base sm:text-lg"></i>
                        <span>Pesan Sekarang</span>
                    </button>
                </div>
            </div>
        </div>
        <?php 
        $index++;
        endforeach; 
        ?>
    </div>
    
    <!-- Info Kontak -->
    <div class="bg-amber-50 p-5 rounded-xl border border-amber-200 text-center mb-6 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 animate-fade-in" style="animation-delay: 0.8s;">
        <div class="flex items-center justify-center gap-2 text-amber-800 mb-2">
            <i class="fab fa-whatsapp text-green-600 text-xl"></i>
            <span class="font-semibold text-sm sm:text-base">Pemesanan via WhatsApp</span>
        </div>
        <p class="text-xs sm:text-sm text-amber-700">Klik tombol pada produk untuk memesan</p>
        <p class="text-xs text-amber-600 mt-1">Atau hubungi: 0895-3779-01067</p>
    </div>
    
    <!-- Navigasi Bawah -->
    <div class="flex justify-between items-center mt-6">
        <a href="index.php?page=beranda" 
           class="flex items-center gap-2 text-amber-600 hover:text-amber-800 transition-all duration-300 bg-amber-50 px-4 py-2 rounded-full text-sm hover:shadow-md hover:-translate-x-1 animate-fade-in-left" 
           style="animation-delay: 1s;">
            <i class="fas fa-arrow-left text-xs"></i>
            <span>Company Profile</span>
        </a>
        <a href="index.php?page=poster" 
           class="flex items-center gap-2 text-amber-600 hover:text-amber-800 transition-all duration-300 bg-amber-50 px-4 py-2 rounded-full text-sm hover:shadow-md hover:translate-x-1 animate-fade-in-right" 
           style="animation-delay: 1s;">
            <span>Poster Menu</span>
            <i class="fas fa-arrow-right text-xs"></i>
        </a>
    </div>
</div>

<!-- JavaScript untuk WhatsApp Order -->
<script>
// Nomor WhatsApp bisnis (pastikan formatnya benar)
const phoneNumber = '62895377901067'; // 62 untuk Indonesia, tanpa 0 di depan

// Fungsi untuk memesan via WhatsApp
function orderViaWA(productName, price) {
    // Format harga
    const formattedPrice = 'Rp ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    
    // Buat pesan
    const message = `Halo A'Raffa, saya ingin memesan:\n\n*${productName}*\nHarga: ${formattedPrice}\n\nMohon info ketersediaan. Terima kasih.`;
    
    // Tampilkan notifikasi
    showNotification(`Menyiapkan pesanan ${productName}...`);
    
    // Redirect ke WhatsApp setelah 1 detik
    setTimeout(function() {
        const waUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
        window.open(waUrl, '_blank');
    }, 1000);
    
    // Mencegah event bubbling
    event.preventDefault();
    return false;
}

// Fungsi notifikasi
function showNotification(message) {
    // Hapus notifikasi yang sudah ada
    const existingNotif = document.querySelector('.wa-notification');
    if (existingNotif) existingNotif.remove();
    
    // Buat notifikasi baru
    const notification = document.createElement('div');
    notification.className = 'wa-notification fixed top-5 right-5 bg-green-600 text-white px-6 py-4 rounded-xl shadow-lg z-50 animate-slideIn';
    notification.innerHTML = `
        <div class="flex items-center gap-3">
            <i class="fab fa-whatsapp text-2xl"></i>
            <div>
                <p class="font-semibold">${message}</p>
                <p class="text-sm text-green-100">Mengalihkan ke WhatsApp...</p>
            </div>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Hapus notifikasi setelah 3 detik
    setTimeout(function() {
        if (notification.parentNode) notification.remove();
    }, 3000);
}

// Test fungsi di console
console.log('Fungsi orderViaWA siap digunakan');
</script>

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

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
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

.animate-scale-x {
    animation: scaleX 0.5s ease forwards;
}

.animate-fade-in-left {
    opacity: 0;
    animation: fadeInLeft 0.5s ease forwards;
}

.animate-fade-in-right {
    opacity: 0;
    animation: fadeInRight 0.5s ease forwards;
}

.animate-slideIn {
    animation: slideIn 0.3s ease-out;
}

/* Hover Effects */
.hover\:shadow-xl:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.hover\:-translate-y-2:hover {
    transform: translateY(-0.5rem);
}

.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

.group:hover .group-hover\:bg-amber-900\/10 {
    background-color: rgba(120, 53, 15, 0.1);
}

/* Cursor pointer untuk tombol */
.cursor-pointer {
    cursor: pointer;
}

/* Notifikasi */
.wa-notification {
    position: fixed;
    top: 1.25rem;
    right: 1.25rem;
    z-index: 50;
}
</style>