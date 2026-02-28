<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_param = isset($_GET['page']) ? $_GET['page'] : '';
$active_class = "text-amber-800 font-semibold border-b-2 border-amber-600";
?>

<!-- Navbar dengan Animasi Elegan -->
<div class="bg-white shadow-md border-b-2 border-amber-100 sticky top-0 z-50 animate-slide-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo dan Nama UMKM - Animasi fade in dari kiri -->
            <div class="flex items-center gap-2 group cursor-pointer animate-fade-in-left" 
                 onclick="window.location.href='index.php?page=beranda'">
                <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full overflow-hidden border-2 border-amber-300 transition-all duration-300 group-hover:border-amber-500 group-hover:scale-110">
                    <img src="assets/images/logo_bolen.jpeg" 
                         alt="Logo A'Raffa" 
                         class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-amber-800 text-sm group-hover:text-amber-600 transition-colors duration-300">A'Raffa</span>
                    <span class="text-xs text-amber-600 group-hover:text-amber-500 transition-colors duration-300">Bolen Bakar</span>
                </div>
            </div>
            
            <!-- Menu Navigasi - Animasi fade in dengan delay -->
            <div class="hidden md:flex items-center gap-6 lg:gap-8">
                <a href="index.php?page=beranda" 
                   class="<?= ($page_param == 'beranda') ? $active_class : 'text-amber-700' ?> py-1 transition-all duration-300 font-medium relative group animate-fade-in-down" 
                   style="animation-delay: 0.1s;">
                    Company Profile
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="index.php?page=ecommerce" 
                   class="<?= ($page_param == 'ecommerce') ? $active_class : 'text-amber-700' ?> py-1 transition-all duration-300 font-medium relative group animate-fade-in-down" 
                   style="animation-delay: 0.2s;">
                    E-Commerce
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="index.php?page=poster" 
                   class="<?= ($page_param == 'poster') ? $active_class : 'text-amber-700' ?> py-1 transition-all duration-300 font-medium relative group animate-fade-in-down" 
                   style="animation-delay: 0.3s;">
                    Poster Menu
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            
            <!-- Tombol hamburger untuk mobile - Animasi fade in -->
            <button class="md:hidden text-amber-800 text-xl hover:text-amber-600 transition-all duration-300 hover:scale-110 animate-fade-in-right" id="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile menu dropdown dengan animasi slide down -->
    <div class="hidden md:hidden bg-amber-50 border-t border-amber-200 transition-all duration-300 origin-top" id="mobile-menu">
        <div class="px-4 py-3 space-y-2">
            <a href="index.php?page=beranda" class="block py-2 text-amber-900 hover:text-amber-700 hover:pl-4 transition-all duration-300">Company Profile</a>
            <a href="index.php?page=ecommerce" class="block py-2 text-amber-900 hover:text-amber-700 hover:pl-4 transition-all duration-300">E-Commerce</a>
            <a href="index.php?page=poster" class="block py-2 text-amber-900 hover:text-amber-700 hover:pl-4 transition-all duration-300">Poster Menu</a>
        </div>
    </div>
</div>

<!-- Tambahkan CSS Animasi -->
<style>
/* Animasi untuk Navbar */
@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
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

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-slide-down {
    animation: slideDown 0.5s ease-out forwards;
}

.animate-fade-in-left {
    opacity: 0;
    animation: fadeInLeft 0.5s ease-out forwards;
}

.animate-fade-in-right {
    opacity: 0;
    animation: fadeInRight 0.5s ease-out forwards;
}

.animate-fade-in-down {
    opacity: 0;
    animation: fadeInDown 0.4s ease-out forwards;
}

/* Hover effect untuk menu */
.menu-hover {
    position: relative;
    transition: color 0.3s ease;
}

.menu-hover::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #d97706;
    transition: width 0.3s ease;
}

.menu-hover:hover::after {
    width: 100%;
}

/* Efek untuk logo */
.logo-hover {
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.logo-hover:hover {
    transform: scale(1.1);
    border-color: #d97706;
}
</style>

<script>
document.getElementById('menu-btn')?.addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.style.animation = 'slideDown 0.3s ease-out forwards';
    } else {
        menu.style.animation = 'slideDown 0.3s ease-out reverse forwards';
        setTimeout(() => {
            menu.classList.add('hidden');
        }, 300);
    }
});
</script>