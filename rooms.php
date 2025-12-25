<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms | Ahalya Bhumi Resorts</title>
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

        .nav-menu a.active {
            color: var(--primary);
        }

        .nav-menu a.active::after {
            width: 100%;
        }

        /* ===== HERO IMAGE SECTION ===== */
        .hero-image {
            height: 50vh;
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

        /* ===== ROOMS SECTION ===== */
        .rooms-section {
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

        /* ===== ROOM GRID ===== */
        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 70px;
        }

        .room-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .room-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .room-content {
            padding: 30px;
        }

        .room-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .room-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .room-type {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .room-title {
            font-size: 1.3rem;
            color: var(--dark);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .room-details {
            margin-bottom: 20px;
        }

        .room-details p {
            margin-bottom: 8px;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .room-details i {
            color: var(--secondary);
            margin-top: 4px;
            width: 18px;
        }

        .room-description {
            margin-bottom: 20px;
            line-height: 1.7;
            color: var(--text);
        }

        .room-price {
            background: linear-gradient(135deg, #f8fdfa, #e6f7f0);
            padding: 20px;
            border-radius: var(--radius);
            margin: 25px 0;
            border-left: 4px solid var(--secondary);
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1.1rem;
        }

        .current-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin: 5px 0;
        }

        .discount-badge {
            display: inline-block;
            background: var(--accent);
            color: var(--dark);
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-top: 5px;
        }

        .policy-section {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #eee;
        }

        .policy-section h4 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .policy-list {
            list-style: none;
        }

        .policy-list li {
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
            font-size: 0.95rem;
        }

        .policy-list li:before {
            content: "•";
            color: var(--secondary);
            position: absolute;
            left: 0;
            font-size: 1.2rem;
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
            margin-top: 20px;
        }

        .btn:hover {
            background: #ffc145;
            transform: translateY(-2px);
        }

        .btn-full {
            width: 100%;
            text-align: center;
        }

        /* ===== ADMIN BAR ===== */
        .admin-bar {
            background: linear-gradient(135deg, var(--primary), #2a7f9c);
            color: var(--white);
            padding: 15px 0;
            position: fixed;
            top: 80px;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-icon {
            background: var(--accent);
            color: var(--primary);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .admin-contact {
            display: flex;
            gap: 20px;
        }

        .admin-contact a {
            color: var(--white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
        }

        .admin-contact a:hover {
            color: var(--accent);
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
            .room-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 30px;
            }
            
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            
            .hero-image {
                height: 45vh;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .admin-contact {
                flex-direction: column;
                gap: 10px;
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
            .rooms-section {
                padding: 70px 0;
            }
            
            .hero-image {
                height: 35vh;
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
            
            .room-content {
                padding: 20px;
            }
            
            .room-number {
                font-size: 1.6rem;
            }
            
            .room-title {
                font-size: 1.2rem;
            }
            
            .current-price {
                font-size: 1.6rem;
            }
            
            .admin-bar {
                position: relative;
                top: 0;
                margin-top: 80px;
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
                padding: 15px;
            }
            
            .admin-info, .admin-contact {
                width: 100%;
                justify-content: space-between;
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
            .room-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .hero-image {
                height: 30vh;
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
            
            .room-image {
                height: 200px;
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
            
            .admin-bar {
                font-size: 0.9rem;
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
                height: 25vh;
            }
            
            .hero-title {
                font-size: 1.5rem;
            }
            
            .section-title h2 {
                font-size: 1.4rem;
            }
            
            .room-content {
                padding: 15px;
            }
            
            .room-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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
        
        /* ===== BADGE STYLES ===== */
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-right: 8px;
            margin-bottom: 8px;
        }
        
        .ac-badge {
            background: #e3f2fd;
            color: #1565c0;
        }
        
        .non-ac-badge {
            background: #e8f5e9;
            color: #2e7d32;
        }
        
        .vaidik-badge {
            background: #fff3e0;
            color: #ef6c00;
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
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="rooms.php" class="nav-link active">Rooms</a></li>
                <li><a href="index.php#cuisine" class="nav-link">Cuisine</a></li>
                <li><a href="index.php#activities" class="nav-link">Activities</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <!-- Overlay for mobile menu -->
            <div class="menu-overlay" id="menuOverlay"></div>
        </div>
    </header>

    <!-- ADMIN BAR -->
    <div class="admin-bar">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div class="admin-info">
                <div class="admin-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div>
                    <div>Ahalya Bhumi Eco Tourism Resorts - Room Reservation System</div>
                    <div>Admin: +91 9932277966, +91 6297330209</div>
                </div>
            </div>
            
            <div class="admin-contact">
                <a href="tel:+919932277966">
                    <i class="fas fa-phone"></i> Call Now: 9932277966
                </a>
                <a href="tel:+916297330209">
                    <i class="fas fa-phone"></i> Call Now: 6297330209
                </a>
            </div>
        </div>
    </div>

    <!-- HERO IMAGE SECTION -->
    <section class="hero-image">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Ahalya Bhumi Resort Rooms">
        <div class="hero-overlay">
            <div>
                <h1 class="hero-title">Our Luxurious Rooms</h1>
                <p class="hero-subtitle">Experience Comfort in Nature's Lap</p>
            </div>
        </div>
    </section>

    <!-- ROOMS SECTION -->
    <section class="rooms-section">
        <div class="container">
            <div class="section-title">
                <h2>Choose Your Perfect Retreat</h2>
                <div class="title-line"></div>
                <p style="max-width: 700px; margin: 20px auto 0; color: var(--text);">Select from our range of beautifully designed rooms, each offering unique amenities and stunning views of the surrounding nature.</p>
            </div>
            
            <div class="room-grid">
                <!-- Room 101 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 101">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">101</div>
                            <div class="room-type">A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            The room is a cozy, inviting space filled with warm, natural light streaming in through large windows draped with sheer curtains. The walls are painted in a soft, neutral shade, complementing the light wooden floors that give the room a calm, earthy feel.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹3000/- Per Night</div>
                            <div class="current-price">₹2100/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(101)">Book Room 101 - ₹2,100.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 102 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 102">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">102</div>
                            <div class="room-type">Non A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, Non A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            Step into this inviting room designed for comfort and relaxation. The space features a plush double bed, ideal for a restful night's sleep. Decorated in a soothing palette, the room offers a tranquil ambiance complemented by modern furnishings.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹2500/- Per Night</div>
                            <div class="current-price">₹1950/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(102)">Book Room 102 - ₹1,950.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 103 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 103">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">103</div>
                            <div class="room-type">Non A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, Non A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            Step into this inviting room designed for comfort and relaxation. The space features a plush double bed, ideal for a restful night's sleep. Decorated in a soothing palette, the room offers a tranquil ambiance complemented by modern furnishings.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹2500/- Per Night</div>
                            <div class="current-price">₹1950/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(103)">Book Room 103 - ₹1,950.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 104 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 104">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">104</div>
                            <div class="room-type">Non A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, Non A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            Step into this inviting room designed for comfort and relaxation. The space features a plush double bed, ideal for a restful night's sleep. Decorated in a soothing palette, the room offers a tranquil ambiance complemented by modern furnishings.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹2500/- Per Night</div>
                            <div class="current-price">₹1950/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(104)">Book Room 104 - ₹1,950.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 201 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 201">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">201</div>
                            <div class="room-type">A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            The room is a cozy, inviting space filled with warm, natural light streaming in through large windows draped with sheer curtains. The walls are painted in a soft, neutral shade, complementing the light wooden floors that give the room a calm, earthy feel.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹3000/- Per Night</div>
                            <div class="current-price">₹2100/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(201)">Book Room 201 - ₹2,100.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 202 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 202">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">202</div>
                            <div class="room-type">A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            The room is a cozy, inviting space filled with warm, natural light streaming in through large windows draped with sheer curtains. The walls are painted in a soft, neutral shade, complementing the light wooden floors that give the room a calm, earthy feel.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹3000/- Per Night</div>
                            <div class="current-price">₹2100/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(202)">Book Room 202 - ₹2,100.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 203 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 203">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">203</div>
                            <div class="room-type">A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            The room is a cozy, inviting space filled with warm, natural light streaming in through large windows draped with sheer curtains. The walls are painted in a soft, neutral shade, complementing the light wooden floors that give the room a calm, earthy feel.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹3000/- Per Night</div>
                            <div class="current-price">₹2100/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(203)">Book Room 203 - ₹2,100.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 204 -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Room 204">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">204</div>
                            <div class="room-type">A/C Room</div>
                        </div>
                        
                        <h3 class="room-title">Double Bed, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 252 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 2 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Double Bed</p>
                        </div>
                        
                        <div class="room-description">
                            The room is a cozy, inviting space filled with warm, natural light streaming in through large windows draped with sheer curtains. The walls are painted in a soft, neutral shade, complementing the light wooden floors that give the room a calm, earthy feel.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹3000/- Per Night</div>
                            <div class="current-price">₹2100/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(204)">Book Room 204 - ₹2,100.00/Night</button>
                    </div>
                </div>
                
                <!-- Room 205 - Vaidik Room -->
                <div class="room-card animate-in">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="room-image" alt="Vaidik Room 205">
                    <div class="room-content">
                        <div class="room-header">
                            <div class="room-number">205</div>
                            <div class="room-type">Deluxe Vaidik Room</div>
                        </div>
                        
                        <h3 class="room-title">Deluxe Vaidik, A/C Room</h3>
                        
                        <div class="room-details">
                            <p><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 360 Sq. Feet</p>
                            <p><i class="fas fa-user-friends"></i> <strong>Max Occupancy:</strong> 4 adults</p>
                            <p><i class="fas fa-bed"></i> <strong>Bed:</strong> Two Double Beds</p>
                        </div>
                        
                        <div class="room-description">
                            Experience the serene and spiritual ambiance of Vaidik Rooms, where tradition meets comfort. Each room is thoughtfully designed to provide a peaceful retreat inspired by Vedic wisdom and Indian heritage.
                        </div>
                        
                        <div class="room-price">
                            <div class="original-price">₹4250/- Per Night</div>
                            <div class="current-price">₹3750/- Per Night</div>
                            <div class="discount-badge">Special discount for April & May 2025</div>
                            <p style="margin-top: 10px; font-size: 0.95rem;">Including GST + Without Breakfast</p>
                        </div>
                        
                        <div class="policy-section">
                            <h4>Additional Information:</h4>
                            <ul class="policy-list">
                                <li>Extra person chargeable INR 500 (Including GST + Breakfast)</li>
                                <li>Driver accommodation INR 500 (Including GST + Parking + Breakfast)</li>
                            </ul>
                        </div>
                        
                        <button class="btn btn-full" onclick="bookRoom(205)">Book Vaidik Room 205 - ₹3,750.00/Night</button>
                    </div>
                </div>
            </div>
            
            <!-- POLICIES SECTION -->
            <div class="policy-section" style="background: linear-gradient(135deg, #f8fdfa, #e6f7f0); padding: 40px; border-radius: var(--radius); margin-top: 50px;">
                <h3 style="color: var(--primary); margin-bottom: 25px; text-align: center;">Resort Policies</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 15px;">General Policies:</h4>
                        <ul class="policy-list">
                            <li>Unmarried couples are not allowed.</li>
                            <li>Pets are not allowed.</li>
                            <li>Submit proper identity card before reception.</li>
                            <li>50% Advance and non-refundable on or before 1 to 9 days of your journey.</li>
                            <li>Children above 5 years full charge for fooding.</li>
                            <li>Children 2 - 5 years half charge for fooding.</li>
                            <li>Must follow the hotel / resort / homestay rules & regulations.</li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); margin-bottom: 15px;">Booking Information:</h4>
                        <ul class="policy-list">
                            <li>Check-in time: 12:00 PM</li>
                            <li>Check-out time: 11:00 AM</li>
                            <li>Early check-in subject to availability</li>
                            <li>Late check-out charges may apply</li>
                            <li>All rates are subject to change without prior notice</li>
                            <li>Government taxes extra as applicable</li>
                            <li>For bookings, please contact: +91 9932277966, +91 6297330209</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLEAN NEWSLETTER -->
    <section class="newsletter">
        <div class="container">
            <h3>Book Your Stay Today</h3>
            <p>For reservations or inquiries, contact us directly or subscribe to our newsletter for special offers</p>
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
                        <li><a href="rooms.php">Accommodation</a></li>
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
                        <li><a href="#">Booking Terms</a></li>
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
        
        // Book Room Function
        function bookRoom(roomNumber) {
            const phoneNumbers = "+91 9932277966, +91 6297330209";
            const message = `I would like to book Room ${roomNumber} at Ahalya Bhumi Eco Tourism Resort. Please contact me for further details.`;
            
            // For WhatsApp
            const whatsappUrl = `https://wa.me/919932277966?text=${encodeURIComponent(message)}`;
            
            // For Phone call
            const callUrl = `tel:+919932277966`;
            
            // Show booking options
            if(confirm(`Book Room ${roomNumber}?\n\nYou will be redirected to contact our reservation team.\n\nPhone: ${phoneNumbers}`)) {
                // Try to open WhatsApp, if not available, suggest calling
                window.open(whatsappUrl, '_blank');
            }
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