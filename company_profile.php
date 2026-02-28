<?php
// File: pages/beranda-content.php - Halaman Beranda dengan Company Profile Lengkap
?>
<style>
    /* Animasi halus untuk company profile */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
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
    
    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes borderGlow {
        0% { border-color: rgba(245, 158, 11, 0.2); }
        50% { border-color: rgba(245, 158, 11, 0.5); }
        100% { border-color: rgba(245, 158, 11, 0.2); }
    }
    
    .animate-on-scroll {
        opacity: 0;
        animation: fadeInUp 0.8s ease forwards;
    }
    
    .section-item {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }
    
    /* Delay classes */
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
    .delay-4 { animation-delay: 0.8s; }
    .delay-5 { animation-delay: 1s; }
    .delay-6 { animation-delay: 1.2s; }
    
    /* Hover effects yang halus */
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    .hover-border {
        transition: all 0.3s ease;
    }
    
    .hover-border:hover {
        border-color: #f59e0b;
        box-shadow: 0 0 0 2px rgba(245, 158, 11, 0.1);
    }
    
    /* Stagger animation untuk grid items */
    .stagger-grid > * {
        opacity: 0;
        animation: scaleIn 0.5s ease forwards;
    }
    
    .stagger-grid > *:nth-child(1) { animation-delay: 0.1s; }
    .stagger-grid > *:nth-child(2) { animation-delay: 0.2s; }
    .stagger-grid > *:nth-child(3) { animation-delay: 0.3s; }
    .stagger-grid > *:nth-child(4) { animation-delay: 0.4s; }
    .stagger-grid > *:nth-child(5) { animation-delay: 0.5s; }
    .stagger-grid > *:nth-child(6) { animation-delay: 0.6s; }
    
    /* Animasi untuk angka/nomor section */
    .section-number {
        transition: all 0.3s ease;
    }
    
    .section-number:hover {
        transform: scale(1.1);
        background-color: #d97706 !important;
    }
    
    /* Animasi untuk cards */
    .card-animate {
        transition: all 0.3s ease;
        animation: fadeInUp 0.6s ease forwards;
    }
    
    .card-animate:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="max-w-4xl mx-auto">
    <!-- Header dengan Logo - Animasi fadeInUp -->
    <div class="text-center mb-8 animate-on-scroll">
        <h1 class="text-3xl sm:text-4xl font-bold text-amber-900 mb-2">
            Toko Kue Bolen Bakar Bandung A'Raffa
        </h1>
        <p class="text-lg text-amber-700 mb-1">Duren Sawit, Jakarta Timur</p>
        <p class="text-md text-amber-600">Bolen pisang lezat sejak 2018</p>
        
        <!-- Tombol navigasi -->
        <div class="flex flex-wrap gap-4 justify-center mt-6">
            <a href="index.php?page=ecommerce" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-6 rounded-full shadow-lg transition-all duration-300 text-sm sm:text-base hover:scale-105 hover:shadow-xl">
                <i class="fas fa-shopping-cart mr-2"></i>Lihat E-Commerce
            </a>
            <a href="index.php?page=poster" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-6 rounded-full shadow-lg transition-all duration-300 text-sm sm:text-base hover:scale-105 hover:shadow-xl">
                <i class="fas fa-image mr-2"></i>Lihat Poster Menu
            </a>
        </div>
    </div>

    <!-- Company Profile Lengkap -->
    <div class="bg-amber-50 rounded-3xl p-6 sm:p-8 mb-8 shadow-lg animate-on-scroll delay-1">
        <h2 class="text-2xl font-bold text-amber-900 mb-6 border-b-2 border-amber-200 pb-2">Company Profile</h2>
        
        <!-- 1. Deskripsi Perusahaan -->
        <div class="mb-8 card-animate">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">1</span>
                Deskripsi Perusahaan
            </h3>
            
            <div class="ml-8 space-y-4">
                <!-- Sejarah -->
                <div class="hover-lift p-4 rounded-xl transition-all duration-300" style="animation: fadeInUp 0.6s ease 0.2s both;">
                    <h4 class="font-semibold text-amber-700 mb-1">Sejarah</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Toko Kue Bolen Bakar Bandung A'Raffa didirikan pada tahun 2018 oleh Ibu Tessa Anggraeni. 
                        Usaha ini awalnya dibangun dengan tujuan membantu suami dalam menambah pemasukan keluarga. 
                        Saat itu, beliau memutuskan menjadi ibu rumah tangga yang tetap produktif agar dapat mengurus 
                        anak sekaligus memiliki penghasilan tambahan.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-2">
                        Modal awal usaha ini sebesar Rp10.000.000. Pada awalnya usaha didirikan di daerah Bekasi. 
                        Namun, sempat mengalami musibah banjir yang menyebabkan seluruh dagangan habis terbawa arus. 
                        Setelah kejadian tersebut, usaha kemudian dipindahkan ke Duren Sawit, Jakarta Timur, yang 
                        menjadi lokasi usaha hingga saat ini.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-2">
                        Seiring berjalannya waktu, usaha ini terus berkembang meskipun mengalami berbagai tantangan 
                        seperti persaingan pasar, kendala produksi, serta perawatan mesin dan peralatan.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-2">
                        Saat ini kondisi usaha berjalan stabil, meskipun terkadang mengalami naik turun sebagaimana 
                        usaha pada umumnya.
                    </p>
                </div>
                
                <!-- VISI, MISI, TUJUAN DALAM BENTUK KOTAK (seperti SWOT) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4 stagger-grid">
                    <!-- Visi -->
                    <div class="bg-purple-50 p-4 rounded-xl border border-purple-200 hover-lift transition-all duration-300">
                        <h4 class="font-bold text-purple-700 mb-2 flex items-center text-base">
                            <span class="bg-purple-600 text-white w-5 h-5 rounded-full inline-flex items-center justify-center text-xs mr-2">★</span>
                            Visi
                        </h4>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Mengembangkan usaha yang dapat membuka peluang kerja dan membantu mengurangi pengangguran.
                        </p>
                    </div>
                    
                    <!-- Misi -->
                    <div class="bg-indigo-50 p-4 rounded-xl border border-indigo-200 hover-lift transition-all duration-300 md:col-span-2">
                        <h4 class="font-bold text-indigo-700 mb-2 flex items-center text-base">
                            <span class="bg-indigo-600 text-white w-5 h-5 rounded-full inline-flex items-center justify-center text-xs mr-2">✓</span>
                            Misi
                        </h4>
                        <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 ml-1">
                            <li>Menjaga kualitas rasa dan bahan baku produk.</li>
                            <li>Memberikan harga yang terjangkau untuk semua kalangan masyarakat.</li>
                            <li>Mengembangkan usaha agar dapat dikenal dan dinikmati di berbagai daerah.</li>
                        </ul>
                    </div>
                    
                    <!-- Tujuan (full width) -->
                    <div class="bg-teal-50 p-4 rounded-xl border border-teal-200 hover-lift transition-all duration-300 md:col-span-3">
                        <h4 class="font-bold text-teal-700 mb-2 flex items-center text-base">
                            <span class="bg-teal-600 text-white w-5 h-5 rounded-full inline-flex items-center justify-center text-xs mr-2">🎯</span>
                            Tujuan
                        </h4>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Menjadikan Toko Kue Bolen Bakar Bandung A'Raffa sebagai usaha kuliner yang terus berkembang, 
                            terpercaya, dan mampu menjangkau seluruh lapisan masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 2. Produk / Layanan -->
        <div class="mb-8 card-animate delay-2">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">2</span>
                Produk / Layanan
            </h3>
            
            <div class="ml-8 space-y-4">
                <!-- Keunggulan Produk -->
                <div class="hover-lift p-4 rounded-xl transition-all duration-300" style="animation: fadeInUp 0.6s ease 0.3s both;">
                    <h4 class="font-semibold text-amber-700 mb-1">Keunggulan Produk</h4>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Rasa dijamin enak dan sudah banyak pelanggan yang melakukan pemesanan ulang.</li>
                        <li>Kualitas bahan selalu dijaga dan tidak dikurangi meskipun harga bahan baku naik.</li>
                        <li>Jika harga bahan baku meningkat, penyesuaian dilakukan pada ukuran atau isi tanpa mengurangi kualitas rasa.</li>
                        <li>Harga terjangkau untuk semua kalangan (menengah ke atas dan menengah ke bawah).</li>
                    </ul>
                </div>
                
                <!-- Bahan / Komposisi dengan 3 KOTAK (seperti visi misi tujuan) -->
                <div>
                    <h4 class="font-semibold text-amber-700 mb-3">Bahan / Komposisi</h4>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 stagger-grid">
                        <!-- Kotak 1: Tepung, Pisang, Mesis -->
                        <div class="bg-amber-50 p-4 rounded-xl border border-amber-200 shadow-sm hover-lift transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center text-sm font-bold hover:scale-110 transition-transform">1</span>
                                <h5 class="font-medium text-amber-800">Bahan Dasar</h5>
                            </div>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Tepung terigu</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Pisang</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Kotak 2: Gula, Margarin, Telur -->
                        <div class="bg-amber-50 p-4 rounded-xl border border-amber-200 shadow-sm hover-lift transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center text-sm font-bold hover:scale-110 transition-transform">2</span>
                                <h5 class="font-medium text-amber-800">Bahan Pengembang</h5>
                            </div>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Gula</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Margarin/mentega</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Telur</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Kotak 3: Topping keju -->
                        <div class="bg-amber-50 p-4 rounded-xl border border-amber-200 shadow-sm hover-lift transition-all duration-300 sm:col-span-2 md:col-span-1">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-8 h-8 bg-amber-600 text-white rounded-full flex items-center justify-center text-sm font-bold hover:scale-110 transition-transform">3</span>
                                <h5 class="font-medium text-amber-800">Topping</h5>
                            </div>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Topping keju</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                                    <span>Topping mesis</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Penutup div Produk / Layanan -->
        
        <!-- 3. Struktur Perusahaan -->
        <div class="mb-8 card-animate delay-3">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">3</span>
                Struktur Perusahaan
            </h3>
            
            <div class="ml-8">
                <p class="text-gray-700 mb-4 hover-lift p-2 rounded-lg transition-all duration-300">Usaha ini dikelola langsung oleh pemilik, Ibu Tessa Anggraeni dan Bapak Baihaqi, dengan sistem pengelolaan sederhana namun terorganisir.</p>
                
                <!-- Bagan Struktur Perusahaan (Gambar PNG) - Ukuran diperkecil -->
                <div class="bg-white p-3 rounded-xl shadow-md border border-amber-100 flex flex-col items-center max-w-md mx-auto hover-lift transition-all duration-300">
                    <!-- Judul gambar kecil -->
                    <h4 class="font-semibold text-amber-700 mb-2 text-sm">Struktur Perusahaan A'Raffa</h4>
                    
                    <!-- Tempat gambar PNG dengan ukuran kecil -->
                    <div class="w-full max-w-xs mx-auto">
                        <img src="assets/images/struktur_perusahaan.jpeg" 
                             alt="Bagan Struktur Perusahaan A'Raffa" 
                             class="w-full h-auto rounded-lg shadow-sm hover:shadow-md transition-all duration-300 hover:scale-105"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/300x200/amber/white?text=Struktur+Perusahaan';">
                    </div>
                </div>
            </div>
        </div> <!-- Penutup div Struktur Perusahaan -->
        
        <!-- 4. Analisis SWOT -->
        <div class="mb-8 card-animate delay-4">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">4</span>
                Analisis SWOT
            </h3>
            
            <div class="ml-8 grid grid-cols-1 md:grid-cols-2 gap-4 stagger-grid">
                <!-- Strength (Kekuatan) -->
                <div class="bg-green-100 p-4 rounded-xl border border-green-300 hover-lift transition-all duration-300">
                    <h4 class="font-bold text-green-800 mb-2">✓ Strength (Kekuatan)</h4>
                    <ul class="list-disc list-inside text-gray-800 text-sm space-y-1 ml-1">
                        <li>Rasa produk yang enak dan konsisten.</li>
                        <li>Harga terjangkau.</li>
                        <li>Memiliki pelanggan tetap.</li>
                    </ul>
                </div>
                
                <!-- Weakness (Kelemahan) -->
                <div class="bg-red-100 p-4 rounded-xl border border-red-300 hover-lift transition-all duration-300">
                    <h4 class="font-bold text-red-800 mb-2">✗ Weakness (Kelemahan)</h4>
                    <ul class="list-disc list-inside text-gray-800 text-sm space-y-1 ml-1">
                        <li>Produksi masih bergantung pada peralatan tertentu yang perlu perawatan rutin.</li>
                        <li>Risiko kesalahan produksi seperti bolen gosong atau terbalik.</li>
                    </ul>
                </div>
                
                <!-- Opportunity (Peluang) -->
                <div class="bg-blue-100 p-4 rounded-xl border border-blue-300 hover-lift transition-all duration-300">
                    <h4 class="font-bold text-blue-800 mb-2">↑ Opportunity (Peluang)</h4>
                    <ul class="list-disc list-inside text-gray-800 text-sm space-y-1 ml-1">
                        <li>Pasar luas dari semua kalangan masyarakat.</li>
                        <li>Potensi pengembangan ke berbagai daerah.</li>
                    </ul>
                </div>
                
                <!-- Threat (Ancaman) -->
                <div class="bg-orange-100 p-4 rounded-xl border border-orange-300 hover-lift transition-all duration-300">
                    <h4 class="font-bold text-orange-800 mb-2">! Threat (Ancaman)</h4>
                    <ul class="list-disc list-inside text-gray-800 text-sm space-y-1 ml-1">
                        <li>Kenaikan harga bahan baku.</li>
                        <li>Persaingan pasar kuliner.</li>
                        <li>Risiko musibah seperti banjir atau kerusakan alat produksi.</li>
                    </ul>
                </div>
            </div>
        </div> <!-- Penutup div Analisis SWOT -->
        
        <!-- 5. Logo / Identitas Visual -->
        <div class="mb-8 card-animate delay-5">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">5</span>
                Logo / Identitas Visual
            </h3>
            
            <div class="ml-8">
                <!-- Tampilan Logo (GAMBAR BOLEN) -->
                <div class="flex justify-center mb-6">
                    <div class="bg-white p-4 rounded-xl shadow-md border border-amber-200 max-w-xs hover-lift transition-all duration-300">
                        <!-- Gambar Logo Bolen -->
                        <img src="assets/images/logo_bolen.jpeg" 
                             alt="Logo A'Raffa Bolen Bakar Bandung" 
                             class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/300x300/amber/white?text=Logo+A\'Raffa';">
                    </div>
                </div>
                
                <!-- PENJELASAN IDENTITAS LOGO -->
                <div class="bg-amber-50 p-5 rounded-xl border border-amber-200 hover-lift transition-all duration-300">
                    <h4 class="font-bold text-amber-800 mb-3 flex items-center">
                        <i class="fas fa-info-circle text-amber-500 mr-2"></i>
                        Makna Identitas Logo A'Raffa
                    </h4>
                    
                    <div class="space-y-3">
                        <!-- Gambar bolen di tengah -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Gambar bolen di tengah</span> melambangkan fokus utama pada produk bolen bakar yang berkualitas, renyah, dan isiannya terlihat jelas.</p>
                        </div>
                        
                        <!-- Lingkaran background -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Bentuk lingkaran background</span> melambangkan kehangatan, kebersamaan, dan usaha yang ramah keluarga.</p>
                        </div>
                        
                        <!-- Warna oranye -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Warna oranye pada tulisan A'Raffa</span> melambangkan semangat, kehangatan, dan mampu menggugah selera.</p>
                        </div>
                        
                        <!-- Font script -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Font script (tulisan tangan)</span> melambangkan kesan homemade, personal, dan dibuat dengan penuh cinta.</p>
                        </div>
                        
                        <!-- Banner hijau -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Banner hijau "Bolen Bakar Bandung"</span> melambangkan kesegaran, kualitas bahan, dan identitas produk yang jelas.</p>
                        </div>
                        
                        <!-- Tulisan Duren Sawit -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Tulisan "Duren Sawit"</span> melambangkan identitas lokasi dan kedekatan dengan pelanggan lokal.</p>
                        </div>
                        
                        <!-- Elemen bunga -->
                        <div class="flex gap-2 hover:translate-x-1 transition-transform duration-300">
                            <span class="text-amber-600 font-bold">•</span>
                            <p class="text-gray-700 text-sm"><span class="font-semibold text-amber-700">Elemen bunga dekoratif</span> melambangkan kesan manis, ramah, dan tidak kaku.</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div> <!-- Penutup div Logo / Identitas Visual -->

        <!-- 6. Testimoni / Rating - Masonry Layout -->
        <div class="mb-8 card-animate delay-6">
            <h3 class="text-xl font-semibold text-amber-800 mb-3 flex items-center">
                <span class="bg-amber-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm mr-2 section-number">6</span>
                Rating / Ulasan
            </h3>
            
            <div class="ml-8">
                <!-- Grid dengan ukuran berbeda -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 auto-rows-auto stagger-grid">
                    <!-- Gambar besar untuk rating utama -->
                    <div class="bg-white p-2 rounded-xl shadow-md border border-amber-200 hover-lift transition-all duration-300 col-span-2 row-span-2">
                        <img src="assets/images/rating_utama.jpeg" 
                             alt="Rating Utama" 
                             class="w-full h-full rounded-lg object-cover hover:scale-105 transition-transform duration-300"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/400x400/amber/white?text=Rating+4.5';">
                    </div>
                    
                    <!-- Gambar testimoni kecil -->
                    <div class="bg-white p-2 rounded-xl shadow-md border border-amber-200 hover-lift transition-all duration-300 col-span-2">
                        <img src="assets/images/rating2.jpeg" 
                             alt="Testimoni" 
                             class="w-full h-auto rounded-lg object-cover aspect-video hover:scale-105 transition-transform duration-300">
                    </div>
                    
                    <div class="bg-white p-2 rounded-xl shadow-md border border-amber-200 hover-lift transition-all duration-300 col-span-2">
                        <img src="assets/images/rating3.jpeg" 
                             alt="Testimoni" 
                             class="w-full h-auto rounded-lg object-cover aspect-video hover:scale-105 transition-transform duration-300">
                    </div>
                </div>
                
                <p class="text-center text-xs text-amber-500 mt-4 hover-lift">
                    <i class="fas fa-image mr-1"></i> Koleksi rating/ulasan dari pelanggan
                </p>
            </div>
        </div>

        <!-- 7. Kontak dan Alamat -->
<div class="bg-white p-6 rounded-2xl shadow-md border border-amber-200 mb-8 hover-lift transition-all duration-300">
    <h3 class="text-xl font-semibold text-amber-800 mb-4 flex items-center">
        <i class="fas fa-map-marker-alt text-amber-600 mr-2"></i>
        Kontak dan Alamat
    </h3>
    
    <div class="space-y-4">
        <!-- Alamat -->
        <div>
            <p class="font-medium text-amber-700">Kunjungi Langsung Toko Kami:</p>
            <p class="text-gray-700 font-semibold">
            </p>
        </div>
        
        <!-- LINK LANGSUNG KE GOOGLE MAPS (TANPA GAMBAR) -->
        <div class="bg-blue-50 p-4 rounded-xl border-2 border-blue-200 text-center">
            <div class="flex justify-center mb-2">
                <i class="fas fa-map-marked-alt text-blue-500 text-4xl"></i>
            </div>
            <p class="text-gray-700 mb-3 font-medium">Jl. H. Nasir No.22, RT.4/RW.7, Duren Sawit, Kec. Duren Sawit, Kota Jakarta Timur.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://www.google.com/maps/search/?api=1&query=Jl.+H.+Nasir+No.22+RT.4+RW.7+Duren+Sawit+Jakarta+Timur" 
                   target="_blank" 
                   class="inline-flex items-center justify-center gap-2 px-5 py-3 bg-blue-500 hover:bg-blue-600 text-white rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fab fa-google"></i>
                    <span>Buka Google Maps</span>
                    <i class="fas fa-external-link-alt text-xs"></i>
                </a>
                
                <a href="https://www.google.com/maps/dir/?api=1&destination=Jl.+H.+Nasir+No.22+Duren+Sawit+Jakarta+Timur" 
                   target="_blank" 
                   class="inline-flex items-center justify-center gap-2 px-5 py-3 bg-green-500 hover:bg-green-600 text-white rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    <i class="fas fa-directions"></i>
                    <span>Petunjuk Arah</span>
                </a>
            </div>
            <p class="text-xs text-gray-500 mt-3">
                <i class="fas fa-info-circle"></i> Klik tombol di atas untuk membuka Google Maps
            </p>
        </div>
        
        <!-- ATAU: Gunakan Static Map dengan API Key yang benar -->
        <!--
        <a href="https://www.google.com/maps/search/?api=1&query=Jl.+H.+Nasir+No.22+RT.4+RW.7+Duren+Sawit+Jakarta+Timur" 
           target="_blank" 
           class="block w-full rounded-xl overflow-hidden border-2 border-amber-200 shadow-md hover:shadow-xl transition-all duration-300 hover:scale-[1.02]">
            <img src="https://maps.googleapis.com/maps/api/staticmap?center=-6.234,106.789&zoom=17&size=600x300&maptype=roadmap&markers=color:red%7CJl.+H.+Nasir+No.22+Duren+Sawit&key=AIzaSyA1xR7LxJ7xJ7xJ7xJ7xJ7xJ7xJ7xJ7xJ7x" 
                 alt="Google Maps Lokasi A'Raffa di Jl. H. Nasir No.22 Duren Sawit" 
                 class="w-full h-auto object-cover"
                 onerror="this.onerror=null; this.style.display='none'; document.getElementById('map-fallback').style.display='block';">
            <div class="bg-amber-50 p-2 text-center text-sm text-amber-700 flex items-center justify-center gap-2">
                <i class="fas fa-map-pin text-amber-600"></i>
                <span class="font-semibold">Jl. H. Nasir No.22, Duren Sawit</span>
                <span class="text-xs bg-blue-500 text-white px-2 py-1 rounded-full">Klik untuk buka Maps</span>
            </div>
        </a>
        
        <div id="map-fallback" style="display: none;" class="bg-yellow-50 p-4 rounded-xl border border-yellow-200 text-center">
            <p class="text-yellow-700 mb-2">⚠️ Peta tidak dapat dimuat</p>
            <a href="https://www.google.com/maps/search/?api=1&query=Jl.+H.+Nasir+No.22+RT.4+RW.7+Duren+Sawit+Jakarta+Timur" 
               class="text-blue-500 underline">Klik di sini untuk membuka Google Maps</a>
        </div>
        -->
        
        <!-- Pemisah -->
<div class="border-t border-amber-100 pt-4 mt-2">
    <p class="font-medium text-amber-700 mb-2">Pemesanan & Info Lebih Lanjut:</p>
    <p class="text-gray-700 mb-3">Klik ikon WhatsApp untuk langsung terhubung dengan kami.</p>
    
    <!-- Tombol WhatsApp dengan JavaScript -->
    <div class="flex flex-col sm:flex-row gap-3">
        <!-- WhatsApp Button -->
        <button onclick="waMe()" 
                class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full inline-flex items-center justify-center gap-2 transition-all duration-300 shadow-md flex-1 cursor-pointer hover:scale-105 hover:shadow-xl">
            <i class="fab fa-whatsapp text-xl"></i>
            <span>Chat WhatsApp</span>
        </button>
        
        <!-- Telepon Button -->
        <a href="tel:0895377901067" 
           class="bg-amber-100 hover:bg-amber-200 text-amber-800 px-6 py-3 rounded-full inline-flex items-center justify-center gap-2 transition-all duration-300 flex-1 hover:scale-105 hover:shadow-md">
            <i class="fas fa-phone-alt"></i>
            <span>0895-3779-01067</span>
        </a>
    </div>
</div>

<script>
// Fungsi untuk WhatsApp
function waMe() {
    const phone = '62895377901067'; // Format internasional (62 untuk Indonesia)
    const message = encodeURIComponent("Halo A'Raffa, saya ingin bertanya tentang produk Bolen Bakar. Mohon informasinya. Terima kasih.");
    window.open(`https://wa.me/${phone}?text=${message}`, '_blank');
}

// Fungsi notifikasi (jika ingin pakai notifikasi)
function contactViaWA() {
    showNotification('Menyiapkan chat WhatsApp...');
    setTimeout(waMe, 1000);
}

function showNotification(msg) {
    // Notifikasi sederhana
    alert(msg); // Bisa diganti dengan notifikasi kustom
}
</script>