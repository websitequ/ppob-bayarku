// Mobile Navigation
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    burger.classList.toggle('toggle');
});

// Product Filtering
const categoryBtns = document.querySelectorAll('.category-btn');
const productGrid = document.querySelector('.product-grid');

categoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        categoryBtns.forEach(b => b.classList.remove('active'));
        // Add active class to clicked button
        btn.classList.add('active');
        
        const category = btn.dataset.category;
        // In a real app, you would fetch products from the server based on category
        // For demo, we'll just simulate it
        simulateProductLoading(category);
    });
});

function simulateProductLoading(category) {
    productGrid.innerHTML = '<div class="loading">Memuat produk...</div>';
    
    setTimeout(() => {
        let productsHTML = '';
        const productCount = category === 'all' ? 8 : 4;
        
        for (let i = 1; i <= productCount; i++) {
            productsHTML += `
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/images/products/${category}-product.jpg" alt="Product">
                    </div>
                    <div class="product-info">
                        <h3>Produk ${category} ${i}</h3>
                        <p>Deskripsi singkat produk</p>
                        <div class="product-price">Rp ${Math.floor(Math.random() * 100000).toLocaleString()}</div>
                        <button class="product-btn">Beli Sekarang</button>
                    </div>
                </div>
            `;
        }
        
        productGrid.innerHTML = productsHTML;
    }, 800);
}

// Dark/Light Mode Toggle
const themeToggle = document.getElementById('themeToggle');
const body = document.body;

// Check for saved user preference, if any
const currentTheme = localStorage.getItem('theme');
if (currentTheme) {
    body.setAttribute('data-theme', currentTheme);
    updateThemeIcon(currentTheme);
}

themeToggle.addEventListener('click', () => {
    let theme = body.getAttribute('data-theme');
    if (theme === 'dark') {
        body.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    } else {
        body.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
    updateThemeIcon(body.getAttribute('data-theme'));
});

function updateThemeIcon(theme) {
    const icon = themeToggle.querySelector('i');
    if (theme === 'dark') {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
}

// Initialize products on page load
document.addEventListener('DOMContentLoaded', () => {
    simulateProductLoading('all');
    
    // Initialize charts if on dashboard
    if (document.querySelector('.dashboard-container')) {
        initCharts();
    }
});

// Chart initialization for dashboard
function initCharts() {
    // This would be replaced with actual Chart.js initialization
    console.log('Charts initialized');
}

// Form validation for login/register
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (form) {
        form.addEventListener('submit', (e) => {
            let isValid = true;
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Harap isi semua field yang wajib diisi!');
            }
        });
    }
}

// Initialize form validation if on login/register page
if (document.getElementById('loginForm')) {
    validateForm('loginForm');
}

if (document.getElementById('registerForm')) {
    validateForm('registerForm');
}