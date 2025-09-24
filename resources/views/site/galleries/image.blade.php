@extends('layout.site')

@section('meta')
    <!-- Title -->
    <title>Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices</title>

    <!-- Meta Description -->
    <meta name="description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />

    <!-- Meta Keywords -->
    <meta name="keywords" content="gallery, professional cleaning, home cleaning, office cleaning, before and after cleaning" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices" />
    <meta property="og:description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices" />
    <meta name="twitter:description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <style>
    /* Resetting some default styles for a clean slate */
    :root {
        --primary-color: #007bff; /* A clean blue */
        --secondary-color: #6c757d; /* A soft gray */
        --background-light: #f8f9fa; /* A very light gray for sections */
        --background-white: #ffffff;
        --text-dark: #212529; /* A dark gray for body text */
        --shadow-light: rgba(0, 0, 0, 0.08);
        --shadow-heavy: rgba(0, 0, 0, 0.15);
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background-color: var(--background-light);
    }

    /* --- General Spacing & Layout --- */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    section {
        padding: 80px 0;
    }

    .section-heading {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-heading h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .section-heading p {
        font-size: 1.1rem;
        color: var(--secondary-color);
        max-width: 600px;
        margin: 0 auto;
    }

    /* --- Gallery Filters --- */
    .filter-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin: 30px 0 50px 0;
    }

    .filter-btn {
        background: var(--background-white);
        border: 1px solid #e9ecef;
        padding: 12px 25px;
        border-radius: 50px;
        cursor: pointer;
        font-weight: 600;
        box-shadow: 0 4px 15px var(--shadow-light);
        transition: all 0.3s ease;
        color: var(--secondary-color);
        font-size: 0.9rem;
    }

    .filter-btn.active, .filter-btn:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
    }

    /* --- Gallery Grid --- */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        padding-bottom: 50px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px var(--shadow-light);
        cursor: pointer;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        aspect-ratio: 16/12;
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px var(--shadow-heavy);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        color: white;
        padding: 30px 20px 20px;
        transform: translateY(100%);
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .gallery-item:hover .image-overlay {
        transform: translateY(0);
    }

    .image-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .image-category {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    /* --- Modal Styles --- */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.95);
        opacity: 0;
        transition: opacity 0.4s ease;
        overflow-y: auto;
    }

    .modal.active {
        opacity: 1;
    }

    .modal-content-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 50px 20px;
    }

    .modal-content {
        position: relative;
        max-width: 1000px;
        width: 100%;
        transform: scale(0.9);
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .modal.active .modal-content {
        transform: scale(1);
    }

    .modal-image {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    }

    .modal-info {
        color: white;
        text-align: center;
        padding: 20px 0 0;
    }

    .modal-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .modal-category {
        font-size: 1.1rem;
        opacity: 0.8;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .close-btn:hover {
        color: #ff4757;
        transform: rotate(90deg);
    }

    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
        border: none;
        font-size: 24px;
        padding: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
        z-index: 10;
    }

    .nav-btn:hover {
        background-color: rgba(255, 255, 255, 0.4);
        transform: translateY(-50%) scale(1.1);
    }

    .prev { left: 20px; }
    .next { right: 20px; }

    /* --- Responsive Adjustments --- */
    @media (max-width: 768px) {
        .section-heading h2 { font-size: 2rem; }
        .gallery-grid { gap: 20px; }
        .nav-btn {
            width: 40px;
            height: 40px;
            font-size: 18px;
            padding: 10px;
        }
        .prev { left: 10px; }
        .next { right: 10px; }
    }
</style>

@endsection

@section('content')

<!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="shape1 float-bob-x"><img src="assets/images/shapes/main-slider-v4-shape1.png" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                    Image Gallery</h2>

                <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
            <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="icon-right-arrow1"></span></li>
                    <li>Image Gallery</li>
                </ul>
            </div>
        </div>
    </section>
<!--End Page Header-->

<section class="page-header">
        </section>
<section class="gallery-section">
    <div class="container">
        <div class="section-heading">
            <h2>Our Gallery</h2>
            <p>Explore our latest cleaning projects and see the stunning transformations we've delivered for our clients. From homes to offices, our gallery showcases our commitment to excellence. 📸✨</p>
        </div>

        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="home-cleaning">Home Cleaning</button>
            <button class="filter-btn" data-filter="office-cleaning">Office Cleaning</button>
            <button class="filter-btn" data-filter="deep-cleaning">Deep Cleaning</button>
        </div>

        <div class="gallery-grid" id="galleryGrid">
            <div class="gallery-item" data-category="home-cleaning">
                <img src="https://images.unsplash.com/photo-1577717903332-6136e05698b9?q=80&w=1974&auto=format&fit=crop" alt="Sparkling Living Room" loading="lazy">
                <div class="image-overlay">
                    <div class="image-title">Sparkling Living Room</div>
                    <div class="image-category">Home Cleaning</div>
                </div>
            </div>

            <div class="gallery-item" data-category="office-cleaning">
                <img src="https://images.unsplash.com/photo-1628151010996-27365c1901a1?q=80&w=1935&auto=format&fit=crop" alt="Clean Office Space" loading="lazy">
                <div class="image-overlay">
                    <div class="image-title">Clean Office Space</div>
                    <div class="image-category">Office Cleaning</div>
                </div>
            </div>

            </div>

        </div>
</section>

<div id="imageModal" class="modal">
    <span class="close-btn" id="closeModal">&times;</span>
    <div class="modal-content-wrapper">
        <button id="prevBtn" class="nav-btn prev">&lt;</button>
        <div class="modal-content">
            <img id="modalImage" class="modal-image" src="" alt="">
            <div class="modal-info">
                <h3 id="modalTitle" class="modal-title"></h3>
                <p id="modalCategory" class="modal-category"></p>
                <span id="modalCounter" class="modal-counter"></span>
            </div>
        </div>
        <button id="nextBtn" class="nav-btn next">&gt;</button>
    </div>
</div>

<div class="scroll-top" id="scrollTop">
    <i class="fas fa-chevron-up"></i>
</div>

<script>
    // DOM elements
    const galleryGrid = document.getElementById('galleryGrid');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalCounter = document.getElementById('modalCounter');
    const closeModalBtn = document.getElementById('closeModal');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const scrollTopBtn = document.getElementById('scrollTop');

    let allGalleryItems = Array.from(document.querySelectorAll('.gallery-item'));
    let filteredItems = allGalleryItems;
    let currentImageIndex = 0;

    // Open modal with selected image
    function openModal(index) {
        if (index === -1) return; // Guard clause
        currentImageIndex = index;
        updateModal();
        modal.style.display = 'block';
        setTimeout(() => {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }, 10);
    }

    // Close modal
    function closeModalFunc() {
        modal.classList.remove('active');
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 400);
    }

    // Update modal content
    function updateModal() {
        if (filteredItems.length === 0) return;
        const item = filteredItems[currentImageIndex];
        const img = item.querySelector('img');
        const title = item.querySelector('.image-title').textContent;
        const category = item.querySelector('.image-category').textContent;

        modalImage.src = img.src;
        modalImage.alt = img.alt;
        modalTitle.textContent = title;
        modalCategory.textContent = category;
        modalCounter.textContent = `${currentImageIndex + 1} / ${filteredItems.length}`;
    }

    // Navigate to previous/next image
    function navigateImage(direction) {
        currentImageIndex = (currentImageIndex + direction + filteredItems.length) % filteredItems.length;
        updateModal();
    }

    // Filter gallery based on category
    function filterGallery(category) {
        galleryGrid.style.opacity = '0';
        setTimeout(() => {
            allGalleryItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const isVisible = (category === 'all' || itemCategory === category);
                item.style.display = isVisible ? 'block' : 'none';
            });
            filteredItems = allGalleryItems.filter(item => item.style.display === 'block');
            galleryGrid.style.opacity = '1';
        }, 300); // Small delay for fade effect
    }

    // Event Listeners
    closeModalBtn.addEventListener('click', closeModalFunc);
    prevBtn.addEventListener('click', () => navigateImage(-1));
    nextBtn.addEventListener('click', () => navigateImage(1));

    // Handle clicks on gallery items
    galleryGrid.addEventListener('click', (e) => {
        const item = e.target.closest('.gallery-item');
        if (item) {
            const index = filteredItems.indexOf(item);
            openModal(index);
        }
    });

    // Handle filter button clicks
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            filterGallery(button.getAttribute('data-filter'));
        });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (modal.style.display === 'block') {
            if (e.key === 'Escape') closeModalFunc();
            else if (e.key === 'ArrowLeft') navigateImage(-1);
            else if (e.key === 'ArrowRight') navigateImage(1);
        }
    });

    // Show/hide scroll to top button
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.add('active');
        } else {
            scrollTopBtn.classList.remove('active');
        }
    });

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

@endsection
