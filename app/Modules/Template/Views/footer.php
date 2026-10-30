<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div>
                <div class="brand-logo" style="color: #fff; margin-bottom: 14px;">
                    <div class="brand-icon"><i class="bi bi-box-seam"></i></div>
                    <div><?= esc($company3 ?? '') ?></div>
                </div>
                <p style="font-size: 0.9rem; line-height: 1.6; margin-bottom: 20px; color: #94a3b8;"><?= esc($tagline ?? ($site->comp['tagline'] ?? '')) ?></p>
                <div style="display: flex; gap: 10px;">
                    <?php if (!empty($facebookhtml) && $facebookhtml !== '#'): ?>
                        <a href="<?= esc($facebookhtml) ?>" target="_blank" style="width: 36px; height: 36px; border-radius: 8px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; color: #fff;"><i class="bi bi-facebook"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($twitterhtml) && $twitterhtml !== '#'): ?>
                        <a href="<?= esc($twitterhtml) ?>" target="_blank" style="width: 36px; height: 36px; border-radius: 8px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; color: #fff;"><i class="bi bi-twitter-x"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($instagramhtml) && $instagramhtml !== '#'): ?>
                        <a href="<?= esc($instagramhtml) ?>" target="_blank" style="width: 36px; height: 36px; border-radius: 8px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; color: #fff;"><i class="bi bi-instagram"></i></a>
                    <?php endif; ?>
                    <?php if (!empty($linkedinhtml) && $linkedinhtml !== '#'): ?>
                        <a href="<?= esc($linkedinhtml) ?>" target="_blank" style="width: 36px; height: 36px; border-radius: 8px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; color: #fff;"><i class="bi bi-linkedin"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Navigation</h4>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('/') ?>" style="color: #cbd5e1;">Home</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('about') ?>" style="color: #cbd5e1;">About Us</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('why-choose-us') ?>" style="color: #cbd5e1;">Why Choose Us</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services') ?>" style="color: #cbd5e1;">All Services</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city') ?>" style="color: #cbd5e1;">All States & Cities</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('privacy-policy') ?>" style="color: #cbd5e1;">Privacy Policy</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('terms-and-conditions') ?>" style="color: #cbd5e1;">Terms & Conditions</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('contact') ?>" style="color: #cbd5e1;">Contact Us</a></p>
            </div>

            <!-- Services -->
            <div>
                <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Services</h4>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services/household-moving') ?>" style="color: #cbd5e1;">Household Moving</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services/office-relocation') ?>" style="color: #cbd5e1;">Office Shifting</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services/vehicle-transportation') ?>" style="color: #cbd5e1;">Car & Bike Moving</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services/warehouse-storage') ?>" style="color: #cbd5e1;">Warehouse Storage</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('services/packing-moving') ?>" style="color: #cbd5e1;">Packaging & Crating</a></p>
            </div>

            <!-- Top City Hubs -->
            <div>
                <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Top Locations</h4>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/delhi') ?>" style="color: #cbd5e1;">Delhi NCR</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/maharashtra') ?>" style="color: #cbd5e1;">Maharashtra</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/uttar-pradesh') ?>" style="color: #cbd5e1;">Uttar Pradesh</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/bihar') ?>" style="color: #cbd5e1;">Bihar Hub</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/karnataka') ?>" style="color: #cbd5e1;">Karnataka</a></p>
                <p style="margin-bottom: 10px;"><a href="<?= site_url('city/west-bengal') ?>" style="color: #cbd5e1;">West Bengal</a></p>
            </div>

            <!-- Head Office -->
            <div>
                <h4 style="color: #fff; margin-bottom: 16px; font-weight: 700;">Head Office</h4>
                <p style="margin-bottom: 10px; font-size: 0.9rem; color: #cbd5e1;"><?= esc($address ?? '') ?></p>
                <p style="margin-bottom: 10px;"><a <?= $phonehtml ?? '' ?> style="color: #38bdf8; font-weight: 700;"><?= esc($phone ?? '') ?></a></p>
                <p style="margin-bottom: 10px;"><a href="<?= esc($mailhtml ?? '') ?>" style="color: #cbd5e1;"><?= esc($mail ?? '') ?></a></p>
                <?php if (!empty($whatsapphtml)): ?>
                <p style="margin-top: 15px;">
                    <a href="<?= esc($whatsapphtml) ?>" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: #25d366; color: #fff; padding: 6px 14px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; text-decoration: none;">
                        <i class="bi bi-whatsapp"></i> WhatsApp Chat
                    </a>
                </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="footer-bottom">
            <div>&copy; <?= date('Y') ?> <?= esc($company3 ?? '') ?>. All rights reserved.</div>
            <div class="footer-legal-links" style="display: flex; gap: 15px; align-items: center;">
                <a href="<?= site_url('privacy-policy') ?>" style="color: #94a3b8; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Privacy Policy</a>
                <span style="color: rgba(255,255,255,0.25);">|</span>
                <a href="<?= site_url('terms-and-conditions') ?>" style="color: #94a3b8; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#94a3b8'">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>

<!-- Quote Modal Component (Callable site-wide) -->
<?= view('Modules\Contacts\Views\quotemodal') ?>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>

</body>
</html>
