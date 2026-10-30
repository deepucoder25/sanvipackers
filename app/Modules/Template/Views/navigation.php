<!-- Top Notification Bar -->
<div class="site-topbar">
    <div class="container topbar-flex">
        <div>
            <span><i class="fa-solid fa-phone"></i> <a <?= $phonehtml ?> style="color: #cbd5e1; font-weight: 600;"><?= esc($phone) ?></a></span> &nbsp;&bull;&nbsp; 
            <span><i class="fa-solid fa-envelope"></i> <a href="<?= esc($mailhtml) ?>" style="color: #cbd5e1;"><?= esc($mail) ?></a></span> &nbsp;&bull;&nbsp; 
            <span><i class="fa-solid fa-clock"></i> <?= esc($site->workingHours) ?></span>
        </div>
        <div>
            <a href="<?= site_url('admin/login') ?>" style="color: #cbd5e1; font-size: 0.8rem; margin-right: 15px;"><i class="fa-solid fa-lock"></i> Admin</a>
            <a href="<?= site_url('contact') ?>" style="color: #fff; font-weight: 700;">Get Free Estimate &rarr;</a>
        </div>
    </div>
</div>

<!-- Main Sticky Navigation Bar -->
<nav class="site-navbar">
    <div class="container navbar-flex">
        <a href="<?= site_url('/') ?>" class="brand-logo">
            <div class="brand-icon"><i class="fa-solid fa-cube"></i></div>
            <div><?= esc($company3) ?></div>
        </a>

        <button class="mobile-btn" onclick="document.querySelector('.nav-links').classList.toggle('show')">
            <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="nav-links">
            <li><a href="<?= site_url('/') ?>" class="<?= ($page === 'home') ? 'active' : '' ?>">Home</a></li>
            <li><a href="<?= site_url('about') ?>" class="<?= ($page === 'about') ? 'active' : '' ?>">About Us</a></li>
            <li><a href="<?= site_url('services') ?>" class="<?= ($page === 'services') ? 'active' : '' ?>">Services</a></li>
            <li><a href="<?= site_url('city') ?>" class="<?= ($page === 'city') ? 'active' : '' ?>">Cities / States</a></li>
            <li><a href="<?= site_url('tracking') ?>" class="<?= ($page === 'tracking') ? 'active' : '' ?>">Tracking</a></li>
            <li><a href="<?= site_url('blog') ?>" class="<?= (strpos($page, 'blog') === 0) ? 'active' : '' ?>">Blog</a></li>
            <li><a href="<?= site_url('reviews') ?>" class="<?= ($page === 'reviews') ? 'active' : '' ?>">Reviews</a></li>
            <li><a href="<?= site_url('photo-gallery') ?>" class="<?= (strpos($page, 'gallery') !== false) ? 'active' : '' ?>">Gallery</a></li>
            <li><a href="<?= site_url('contact') ?>" class="<?= ($page === 'contact') ? 'active' : '' ?>">Contact Us</a></li>
        </ul>

        <div style="display: flex; gap: 12px; align-items: center;">
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="btn" style="background: var(--primary-light); color: var(--primary); padding: 9px 18px; font-size: 0.88rem; font-weight: 700;">
                <i class="fa-solid fa-phone"></i> Call Now
            </a>
            <a href="<?= site_url('contact') ?>" class="btn btn-secondary" style="padding: 10px 20px; font-size: 0.88rem;">
                <i class="fa-solid fa-paper-plane"></i> Get Quote
            </a>
        </div>
    </div>
</nav>
