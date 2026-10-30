<!-- Top Notification Bar -->
<div class="site-topbar">
    <div class="container topbar-flex">
        <div class="topbar-left">
            <span class="topbar-item">
                <i class="bi bi-geo-alt-fill text-warning"></i>
                <span>All India Relocation Services</span>
            </span>
            <span class="topbar-divider d-none d-sm-inline">&bull;</span>
            <?php if (!empty($mail)): ?>
            <a href="mailto:<?= esc($mail) ?>" class="topbar-link d-none d-sm-inline-flex">
                <i class="bi bi-envelope-fill text-danger"></i>
                <span><?= esc($mail) ?></span>
            </a>
            <?php endif; ?>
            <?php if (!empty($site->workingHours)): ?>
            <span class="topbar-divider d-none d-lg-inline">&bull;</span>
            <span class="topbar-text d-none d-lg-inline-flex">
                <i class="bi bi-clock-fill text-warning"></i>
                <span><?= esc($site->workingHours) ?></span>
            </span>
            <?php endif; ?>
        </div>
        <div class="topbar-right">
            <span class="topbar-badge d-none d-md-inline-flex">
                <i class="bi bi-shield-check text-warning"></i>
                <span>Verified & Insured Movers</span>
            </span>
        </div>
    </div>
</div>

<!-- Main Sticky Navigation Bar -->
<nav class="site-navbar">
    <div class="container navbar-flex">
        <a href="<?= site_url('/') ?>" class="brand-logo">
            <?php
            $logoFile = null;
            $candidateExts = ['logo.png', 'logo.webp', 'logo.jpg', 'logo.svg', 'logo.jpeg'];
            foreach ($candidateExts as $file) {
                if (is_file(FCPATH . 'assets/img/logo/' . $file) || 
                    (defined('ROOTPATH') && is_file(ROOTPATH . 'assets/img/logo/' . $file)) || 
                    (defined('ROOTPATH') && is_file(ROOTPATH . 'public/assets/img/logo/' . $file))) {
                    $logoFile = 'assets/img/logo/' . $file;
                    break;
                }
            }
            ?>
            <?php if (!empty($logoFile)): ?>
                <img src="<?= base_url($logoFile) ?>" alt="<?= esc($company3) ?>" class="site-logo-img">
            <?php else: ?>
                <div class="brand-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="brand-content">
                    <div class="brand-name">
                        <?= esc($company3) ?><span class="brand-dot">.</span>
                    </div>
                    <div class="brand-tagline">Packers & Movers</div>
                </div>
            <?php endif; ?>
        </a>

        <button class="mobile-btn" type="button" aria-label="Toggle navigation" onclick="document.querySelector('.nav-links').classList.toggle('show')">
            <i class="bi bi-list"></i>
        </button>

        <ul class="nav-links">
            <li>
                <a href="<?= site_url('/') ?>" class="<?= ($page === 'home') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-house-door-fill"></i></span>
                    <span class="nav-link-text">Home</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('about') ?>" class="<?= ($page === 'about') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-info-circle-fill"></i></span>
                    <span class="nav-link-text">About Us</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('services') ?>" class="<?= ($page === 'services') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-truck"></i></span>
                    <span class="nav-link-text">Services</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('city') ?>" class="<?= ($page === 'city') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <span class="nav-link-text">States</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('tracking') ?>" class="<?= ($page === 'tracking') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-pin-map-fill"></i></span>
                    <span class="nav-link-text">Tracking</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('blog') ?>" class="<?= (strpos($page, 'blog') === 0) ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
                    <span class="nav-link-text">Blog</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
            <li>
                <a href="<?= site_url('contact') ?>" class="<?= ($page === 'contact') ? 'active' : '' ?>">
                    <span class="nav-link-icon"><i class="bi bi-chat-dots-fill"></i></span>
                    <span class="nav-link-text">Contact Us</span>
                    <i class="bi bi-chevron-right nav-link-arrow"></i>
                </a>
            </li>
        </ul>

        <div class="nav-actions">
            <?php if (!empty($phone)): ?>
            <a <?= $phonehtml ?> class="nav-phone-chip d-none d-lg-inline-flex">
                <div class="phone-chip-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="phone-chip-info d-none d-xl-flex">
                    <span class="phone-chip-label">24/7 Helpline</span>
                    <span class="phone-chip-num"><?= esc($phone) ?></span>
                </div>
            </a>
            <?php endif; ?>
            <a href="<?= site_url('contact') ?>" class="btn-nav-quote">
                <span>Get Free Quote</span>
                <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </div>
    <div class="navbar-accent-line"></div>
</nav>