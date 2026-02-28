// Main JavaScript file

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Add active class to current nav item
    const currentLocation = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentLocation.split('/').pop()) {
            link.classList.add('active-nav');
        }
    });

    // Product hover effects
    const products = document.querySelectorAll('.product-item');
    products.forEach(product => {
        product.addEventListener('mouseenter', () => {
            product.classList.add('scale-105');
        });
        product.addEventListener('mouseleave', () => {
            product.classList.remove('scale-105');
        });
    });

    // Order button click handler
    const orderButtons = document.querySelectorAll('.order-btn');
    orderButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Terima kasih! Silahkan hubungi ' + document.querySelector('.contact-phone').textContent + ' untuk memesan.');
        });
    });
});

// Format price to Rupiah
function formatRupiah(price) {
    return 'Rp ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ' / pcs';
}