<footer class="site-footer">
    <!-- Atmospheric Ambient Glows -->
    <div class="footer-glow footer-glow-red"></div>
    <div class="footer-glow footer-glow-yellow"></div>

    <!-- Top Accent Gradient Line -->
    <div class="footer-top-accent"></div>

    <!-- Main Footer Content -->
    <div class="container footer-main-content">
        <div class="row g-4 g-lg-5">
            <!-- Col 1: Brand & Bio -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-brand-wrap mb-3">
                    <div class="footer-brand-emblem">
                        <div class="brand-emblem-icon">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <div class="brand-emblem-text">
                            <span class="brand-text-name">
                                <?= esc($company3 ?? 'Sanvi Packers') ?><span class="brand-dot-pulse">.</span>
                            </span>
                            <span class="brand-text-tag">PACKERS &amp; MOVERS &bull; RELOCATIONS</span>
                        </div>
                    </div>
                    <span class="footer-iso-badge">
                        <i class="bi bi-patch-check-fill text-warning"></i>
                        <span>ISO 9001:2015 Certified Relocation</span>
                    </span>
                </div>

                <p class="footer-bio mb-3">
                    <?= !empty($tagline) ? esc($tagline) : "India's premier relocation partner delivering certified multi-layer packing, GPS-tracked fleet, and 100% damage-free delivery guarantee across 500+ Indian cities." ?>
                </p>

                <!-- Trust Metric Chips -->
                <div class="footer-trust-chips mb-3">
                    <span class="trust-chip"><i class="bi bi-shield-fill-check text-warning"></i> IBA Approved</span>
                    <span class="trust-chip"><i class="bi bi-star-fill text-warning"></i> 4.9/5 Rating</span>
                    <span class="trust-chip"><i class="bi bi-shield-lock-fill text-danger"></i> 100% Insured</span>
                </div>

                <!-- Social Links -->
                <div class="footer-social-section">
                    <span class="footer-social-label">Follow Our Journey</span>
                    <div class="footer-social-wrap">
                        <a href="<?= !empty($facebookhtml) && $facebookhtml !== '#' ? esc($facebookhtml) : site_url('contact') ?>" target="_blank" class="footer-social-btn fb-btn" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="<?= !empty($twitterhtml) && $twitterhtml !== '#' ? esc($twitterhtml) : site_url('contact') ?>" target="_blank" class="footer-social-btn tw-btn" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="<?= !empty($instagramhtml) && $instagramhtml !== '#' ? esc($instagramhtml) : site_url('contact') ?>" target="_blank" class="footer-social-btn ig-btn" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="<?= !empty($linkedinhtml) && $linkedinhtml !== '#' ? esc($linkedinhtml) : site_url('contact') ?>" target="_blank" class="footer-social-btn in-btn" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-col-header">
                    <span class="footer-col-eyebrow">EXPLORE</span>
                    <h3 class="footer-col-title h5">Quick Links</h3>
                </div>
                <ul class="footer-links-list">
                    <li>
                        <a href="<?= site_url('/') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-house-door-fill"></i></span>
                            <span class="link-title">Home</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('about') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-shield-check"></i></span>
                            <span class="link-title">About Us</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-boxes"></i></span>
                            <span class="link-title">Our Services</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('city') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-geo-alt-fill"></i></span>
                            <span class="link-title">States / Cities</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('tracking') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-crosshair2"></i></span>
                            <span class="link-title">Track Move</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('blog') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-newspaper"></i></span>
                            <span class="link-title">Latest Blog</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('contact') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-quick"><i class="bi bi-headset"></i></span>
                            <span class="link-title">Contact Us</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Services -->
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-col-header">
                    <span class="footer-col-eyebrow">SOLUTIONS</span>
                    <h3 class="footer-col-title h5">Our Services</h3>
                </div>
                <ul class="footer-links-list">
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-house-heart-fill"></i></span>
                            <span class="link-title">Household Shifting</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-buildings-fill"></i></span>
                            <span class="link-title">Office Relocation</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-car-front-fill"></i></span>
                            <span class="link-title">Car &amp; Bike Transport</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-archive-fill"></i></span>
                            <span class="link-title">Warehouse Storage</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-box-seam-fill"></i></span>
                            <span class="link-title">Packaging &amp; Crating</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('services') ?>" class="footer-nav-link">
                            <span class="link-icon-box link-icon-srv"><i class="bi bi-gear-wide-connected"></i></span>
                            <span class="link-title">Heavy Machinery Move</span>
                            <i class="bi bi-chevron-right link-arrow"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 4: Get In Touch -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-col-header">
                    <span class="footer-col-eyebrow">CONNECT</span>
                    <h3 class="footer-col-title h5">Get In Touch</h3>
                </div>
                <div class="footer-contact-items">
                    <?php if (!empty($address)): ?>
                    <div class="footer-contact-card">
                        <div class="contact-card-icon icon-yellow">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-card-info">
                            <span class="contact-card-label">HEAD OFFICE</span>
                            <span class="contact-card-val"><?= esc($address) ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($phone)): ?>
                    <div class="footer-contact-card">
                        <div class="contact-card-icon icon-red">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-card-info">
                            <span class="contact-card-label">CALL ANYTIME (24/7)</span>
                            <a <?= $phonehtml?> class="contact-card-val highlight-phone" aria-label="Call Now" title="Call Now">
                                <?= $phone ?>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($mail)): ?>
                    <div class="footer-contact-card">
                        <div class="contact-card-icon icon-dark">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-card-info">
                            <span class="contact-card-label">EMAIL SUPPORT</span>
                            <a href="<?= $mailhtml ?>" class="contact-card-val">
                                <?= $mail ?>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($whatsapphtml)): ?>
                    <div class="pt-2">
                        <a href="<?= esc($whatsapphtml) ?>" target="_blank" rel="noopener noreferrer" class="footer-whatsapp-pill" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
                            <div class="wa-pulse-dot"></div>
                            <i class="bi bi-whatsapp"></i>
                            <span>Chat Live on WhatsApp</span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Strip -->
    <div class="footer-bottom">
        <div class="footer-bottom-accent"></div>
        <div class="container">
            <div class="row align-items-center g-3">
                <!-- Left: Copyright & Brand -->
                <div class="col-md-6 text-center text-md-start">
                    <div class="footer-copy-wrap">
                        <span class="footer-copyright-text">
                            &copy; <?= date('Y') ?> <span class="footer-brand-pill"><?= esc($company3 ?? 'Sanvi Packers') ?></span>
                        </span>
                        <span class="footer-copy-divider d-none d-sm-inline">&bull;</span>
                        <span class="footer-copy-sub">
                            <i class="bi bi-shield-check text-warning"></i> All Rights Reserved
                        </span>
                    </div>
                </div>

                <!-- Right: Legal Pills -->
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-bottom-actions">
                        <div class="footer-legal-pills">
                            <a href="<?= site_url('privacy-policy') ?>" class="legal-pill-btn">
                                <i class="bi bi-shield-shaded"></i>
                                <span>Privacy</span>
                            </a>
                            <a href="<?= site_url('terms-and-conditions') ?>" class="legal-pill-btn">
                                <i class="bi bi-file-earmark-text"></i>
                                <span>Terms</span>
                            </a>
                            <a href="<?= site_url('contact') ?>" class="legal-pill-btn">
                                <i class="bi bi-headset"></i>
                                <span>Support</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Quick Action Buttons (Left: Call & WhatsApp | Right: Get Quote) -->
<aside class="pm-floating-dock pm-floating-dock-left" aria-label="Quick Contact Actions">
    <!-- Call Float Button -->
    <a <?= $phonehtml ?> class="pm-float-btn float-call" data-tooltip="Call Now" title="Call Now" aria-label="Call Now">
        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
        <span class="float-pulse-ring ring-call"></span>
    </a>

    <!-- WhatsApp Float Button -->
    <a href="<?=$whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-float-btn float-whatsapp" data-tooltip="WhatsApp" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
        <span class="float-pulse-ring ring-wa"></span>
    </a>
</aside>

<aside class="pm-floating-dock pm-floating-dock-right" aria-label="Quick Quote Action">
    <!-- Get Quote Float Button (Opens Quote Modal) -->
    <button type="button" class="pm-float-btn float-quote" data-bs-toggle="modal" data-bs-target="#qteModal" data-tooltip="Get Quote" aria-label="Get Free Moving Quote">
        <i class="bi bi-calculator-fill"></i>
        <span class="float-pulse-ring ring-quote"></span>
    </button>
</aside>

<!-- Quote Modal Component (Callable site-wide) -->
<?= view('Modules\Contacts\Views\quotemodal') ?>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>

</body>
</html>
