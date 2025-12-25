<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Ahalya Bhumi Resorts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===== REUSE SAME STYLES FROM INDEX.PHP ===== */
        :root {
            --primary: #1a5f7a;      /* Deep Teal */
            --secondary: #57cc99;    /* Fresh Green */
            --accent: #ffd166;       /* Warm Gold */
            --light: #f8f9fa;        /* Light Gray */
            --dark: #2d3748;         /* Dark Gray */
            --text: #4a5568;         /* Text Gray */
            --white: #ffffff;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --radius: 12px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--white);
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ===== MINIMALIST HEADER WITH BURGER MENU ===== */
        header {
            background: var(--white);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(10px);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 12px;
            z-index: 1001;
        }

        .logo-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-main {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1.1;
        }

        .logo-tagline {
            font-size: 0.75rem;
            color: var(--secondary);
            font-weight: 500;
            letter-spacing: 1px;
        }

        /* ===== BURGER MENU STYLES ===== */
        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 1001;
        }

        .menu-toggle span {
            display: block;
            width: 100%;
            height: 3px;
            background-color: var(--primary);
            border-radius: 3px;
            transition: var(--transition);
        }

        .menu-toggle.active span:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 32px;
        }

        .nav-menu a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            padding: 8px 0;
            transition: var(--transition);
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* ===== HERO IMAGE SECTION ===== */
        .hero-image {
            height: 60vh;
            position: relative;
            margin-top: 80px;
            overflow: hidden;
            border-radius: 0 0 var(--radius) var(--radius);
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
            display: flex;
            align-items: flex-end;
            padding: 60px 40px 40px;
            color: var(--white);
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* ===== ABOUT CONTENT SECTION ===== */
        .about-section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .title-line {
            width: 60px;
            height: 4px;
            background: var(--secondary);
            margin: 0 auto;
            border-radius: 2px;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            margin-bottom: 70px;
        }

        .about-text h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .highlight {
            color: var(--primary);
            font-weight: 600;
        }

        .about-image {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.03);
        }

        /* ===== VALUES SECTION ===== */
        .values-section {
            background: linear-gradient(to bottom, #f8fdfa, var(--white));
            padding: 100px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .value-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .value-card h4 {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        /* ===== CLEAN NEWSLETTER ===== */
        .newsletter {
            background: linear-gradient(135deg, var(--primary), #2a7f9c);
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }

        .newsletter h3 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .newsletter p {
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            gap: 10px;
        }

        .form-input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-btn {
            background: var(--accent);
            color: var(--primary);
            padding: 0 35px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .form-btn:hover {
            background: #ffc145;
        }

        /* ===== CLEAN FOOTER ===== */
        footer {
            background: var(--dark);
            color: #cbd5e0;
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col h4 {
            color: var(--white);
            font-size: 1.1rem;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--secondary);
        }

        .contact-info p {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .contact-info i {
            color: var(--secondary);
            margin-top: 4px;
            width: 18px;
        }

        .copyright {
            text-align: center;
            padding: 25px 0;
            border-top: 1px solid #4a5568;
            color: #a0aec0;
            font-size: 0.9rem;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            .hero-image {
                height: 50vh;
            }
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            /* ===== BURGER MENU FOR MOBILE ===== */
            .menu-toggle {
                display: flex;
            }
            
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background: var(--white);
                flex-direction: column;
                justify-content: flex-start;
                padding-top: 100px;
                padding-left: 30px;
                gap: 20px;
                transition: right 0.4s ease;
                box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }
            
            .nav-menu.active {
                right: 0;
            }
            
            .nav-menu li {
                opacity: 0;
                transform: translateX(20px);
                transition: opacity 0.3s ease, transform 0.3s ease;
            }
            
            .nav-menu.active li {
                opacity: 1;
                transform: translateX(0);
            }
            
            .nav-menu.active li:nth-child(1) { transition-delay: 0.1s; }
            .nav-menu.active li:nth-child(2) { transition-delay: 0.15s; }
            .nav-menu.active li:nth-child(3) { transition-delay: 0.2s; }
            .nav-menu.active li:nth-child(4) { transition-delay: 0.25s; }
            .nav-menu.active li:nth-child(5) { transition-delay: 0.3s; }
            .nav-menu.active li:nth-child(6) { transition-delay: 0.35s; }
            
            .nav-menu a {
                font-size: 1.1rem;
                padding: 10px 0;
                display: block;
                border-bottom: 1px solid #f0f0f0;
                width: 90%;
            }
            
            .nav-menu a::after {
                display: none;
            }
            
            /* ===== MOBILE RESPONSIVE SECTIONS ===== */
            .about-section, .values-section {
                padding: 70px 0;
            }
            
            .hero-image {
                height: 40vh;
                margin-top: 70px;
                border-radius: 0;
            }
            
            .hero-overlay {
                padding: 40px 20px 30px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .about-text h3 {
                font-size: 1.6rem;
            }
            
            .value-card {
                padding: 30px 20px;
            }
            
            .newsletter-form {
                flex-direction: column;
                padding: 0 15px;
            }
            
            .form-btn {
                padding: 15px;
                width: 100%;
            }
            
            .newsletter {
                padding: 60px 0;
            }
            
            .newsletter h3 {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 576px) {
            .values-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .hero-image {
                height: 35vh;
            }
            
            .hero-title {
                font-size: 1.7rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 1.6rem;
            }
            
            .about-text p {
                font-size: 1rem;
                line-height: 1.6;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-col h4 {
                margin-bottom: 20px;
            }
            
            .footer-links li {
                margin-bottom: 10px;
            }
            
            .contact-info p {
                font-size: 0.9rem;
            }
            
            .copyright {
                padding: 20px 0;
                font-size: 0.85rem;
            }
            
            .logo-main {
                font-size: 1.4rem;
            }
            
            .logo-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
            
            .newsletter h3 {
                font-size: 1.5rem;
            }
            
            .newsletter p {
                font-size: 0.95rem;
                padding: 0 15px;
            }
        }

        @media (max-width: 400px) {
            .logo-main {
                font-size: 1.2rem;
            }
            
            .logo-tagline {
                font-size: 0.65rem;
            }
            
            .hero-image {
                height: 30vh;
            }
            
            .hero-title {
                font-size: 1.5rem;
            }
            
            .section-title h2 {
                font-size: 1.4rem;
            }
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-in {
            animation: fadeIn 0.8s ease forwards;
        }
        
        /* ===== OVERLAY FOR MOBILE MENU ===== */
        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
        }
        
        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .btn {
            display: inline-block;
            background: var(--accent);
            color: var(--primary);
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #ffc145;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <!-- CLEAN HEADER WITH BURGER MENU -->
    <header>
        <div class="container header-content">
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="logo-text">
                    <div class="logo-main">Ahalya Bhumi</div>
                    <div class="logo-tagline">ECO TOURISM RESORT</div>
                </div>
            </a>
            
            <!-- Burger Menu Button -->
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link active">About</a></li>
                <li><a href="index.php#rooms" class="nav-link">Rooms</a></li>
                <li><a href="index.php#cuisine" class="nav-link">Cuisine</a></li>
                <li><a href="index.php#activities" class="nav-link">Activities</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <!-- Overlay for mobile menu -->
            <div class="menu-overlay" id="menuOverlay"></div>
        </div>
    </header>

    <!-- HERO IMAGE SECTION -->
    <section class="hero-image">
        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Ahalya Bhumi Resort Overview">
        <div class="hero-overlay">
            <div>
                <h1 class="hero-title">About Ahalya Bhumi</h1>
                <p class="hero-subtitle">Where Luxury Meets Nature</p>
            </div>
        </div>
    </section>

    <!-- ABOUT CONTENT SECTION -->
    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>Welcome to Ahalya Bhumi Eco Tourism Resort</h2>
                <div class="title-line"></div>
            </div>
            
            <div class="about-content">
                <div class="about-text animate-in">
                    <h3>Our Sanctuary in Nature</h3>
                    <p>Nestled amidst the serene embrace of pristine lake and majestic mountain, <span class="highlight">Ahalya Bhumi Eco Tourism Resort</span> offers a tranquil escape into nature's heart. Our resort is designed to harmonize with the natural beauty of its surroundings, providing guests with an unparalleled experience of peace and rejuvenation.</p>
                    
                    <p>At <span class="highlight">Ahalya Bhumi</span>, we believe in sustainable tourism that respects and preserves the environment. Every aspect of our resort reflects a commitment to eco-friendly practices while ensuring the utmost comfort and luxury for our guests.</p>
                    
                    <p>Whether you're waking up to the gentle ripples of the lake, embarking on a scenic trek through the mountains, or enjoying the vibrant hues of a sunset from your balcony, you'll feel a profound connection with nature.</p>
                    
                    <p>Our vision is to create a sanctuary where visitors can unwind, recharge, and reconnect with the earth. With personalized service, thoughtfully curated accommodations, and a variety of activities ranging from boating and bird-watching to cultural exploration, <span class="highlight">Ahalya Bhumi Eco Tourism Resort</span> promises an unforgettable stay.</p>
                </div>
                
                <div class="about-image animate-in">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Resort Scenery">
                </div>
            </div>
            
            <div class="about-content">
                <div class="about-image animate-in">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w-800&q=80" alt="Luxury Accommodation">
                </div>
                
                <div class="about-text animate-in">
                    <h3>The Ahalya Bhumi Experience</h3>
                    <p><span class="highlight">Ahalya Bhumi Eco Tourism Resort</span>, a tranquil haven surrounded by lush green fields. Here, nature and luxury come together to create an unforgettable retreat for those seeking peace, beauty, and relaxation.</p>
                    
                    <p>Our resort is more than just a place to stay; it's an immersive experience where every detail has been thoughtfully designed to harmonize with the natural environment. Each luxury room offers a private balcony that opens up to breathtaking views of serene waters and verdant hills.</p>
                    
                    <p>Imagine starting your day with the soft glow of sunrise reflecting on the lake or unwinding in the evening as the mountains fade into the twilight. The sound of rustling leaves, the gentle ripple of the lake, and the fresh mountain breeze make every moment here a connection with nature.</p>
                    
                    <p>At <span class="highlight">Ahalya Bhumi</span>, we pride ourselves on providing a perfect balance between comfort and sustainability. Our accommodations feature elegant interiors, blending modern amenities with eco-friendly design, ensuring that you enjoy a luxurious yet mindful stay.</p>
                    
                    <p>We invite you to escape the bustle of everyday life and immerse yourself in the serene beauty of <span class="highlight">Ahalya Bhumi Eco Tourism Resort</span>, where the harmony of lakes and mountains becomes the backdrop to your most cherished memories.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR VALUES SECTION -->
    <section class="values-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <div class="title-line"></div>
            </div>
            
            <div class="values-grid">
                <div class="value-card animate-in">
                    <i class="fas fa-leaf value-icon"></i>
                    <h4>Sustainability</h4>
                    <p>Commitment to eco-friendly practices that preserve our natural environment for future generations.</p>
                </div>
                
                <div class="value-card animate-in">
                    <i class="fas fa-heart value-icon"></i>
                    <h4>Luxury with Purpose</h4>
                    <p>Providing exceptional comfort while maintaining harmony with nature and local culture.</p>
                </div>
                
                <div class="value-card animate-in">
                    <i class="fas fa-hands-helping value-icon"></i>
                    <h4>Community Connection</h4>
                    <p>Supporting local communities and promoting cultural exchange through sustainable tourism.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CLEAN NEWSLETTER -->
    <section class="newsletter">
        <div class="container">
            <h3>Stay Connected With Us</h3>
            <p>Subscribe to our newsletter for updates on special offers, events, and resort news</p>
            <form class="newsletter-form" onsubmit="handleSubscribe(event)">
                <input type="email" class="form-input" placeholder="Enter your email address" required>
                <button type="submit" class="form-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- CLEAN FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>About Ahalya Bhumi</h4>
                    <p>Nestled amidst majestic mountains and a crystal-clear lake, our resort harmonizes luxury with nature, offering a perfect retreat for relaxation and adventure.</p>
                </div>
                
                <div class="footer-col">
                    <h4>Important Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="index.php#rooms">Accommodation</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="index.php#gallery">Photo Gallery</a></li>
                        <li><a href="index.php#cuisine">Cuisines</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Other Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Booking</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Contact Information</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-user"></i> Chittaranjan Sarkar</p>
                        <p><i class="fas fa-map-marker-alt"></i> Baranti, Manpur, PO-Muradih,<br>Road No-5, PS- Santuri, Purulia</p>
                        <p><i class="fas fa-phone"></i> +91 9932277966<br>+91 6297330209</p>
                        <p><i class="fas fa-envelope"></i> ahalyabhumiresorts@gmail.com</p>
                        <p><i class="fas fa-globe"></i> www.ahalyabhumiresorts.com</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>Copyright © <script>document.write(new Date().getFullYear());</script> Ahalya Bhumi Eco Tourism Resorts. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Newsletter Form
        function handleSubscribe(event) {
            event.preventDefault();
            const email = event.target.querySelector('input[type="email"]').value;
            alert(`Thank you for subscribing with: ${email}`);
            event.target.reset();
        }
        
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');
        const menuOverlay = document.getElementById('menuOverlay');
        const navLinks = document.querySelectorAll('.nav-link');
        
        function toggleMenu() {
            menuToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            
            // Prevent body scroll when menu is open
            if (navMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        }
        
        // Close menu when clicking on a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });
        
        // Close menu when clicking overlay
        menuOverlay.addEventListener('click', toggleMenu);
        
        // Toggle menu when clicking burger button
        menuToggle.addEventListener('click', toggleMenu);
        
        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Close menu on window resize if it's open on mobile
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-in');
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.style.animationPlayState = 'running';
                }
            });
        }
        
        // Initialize animations
        document.querySelectorAll('.animate-in').forEach(el => {
            el.style.opacity = '0';
            el.style.animationPlayState = 'paused';
        });
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>