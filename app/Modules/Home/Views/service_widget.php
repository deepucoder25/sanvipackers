<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title">Our Professional Services</h2>
            <p class="section-subtitle">Comprehensive, door-to-door relocation and storage solutions tailored to your schedule.</p>
        </div>
        <div class="card-grid">
            <?php foreach ($services as $srv): ?>
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid <?= esc($srv['icon']) ?>"></i></div>
                    <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: var(--dark);"><?= esc($srv['title']) ?></h3>
                    <p style="color: var(--text-muted); font-size: 0.94rem; line-height: 1.6; margin-bottom: 20px;"><?= esc($srv['desc']) ?></p>
                    <a href="<?= site_url('services/' . $srv['slug']) ?>" style="color: var(--primary); font-weight: 700; font-size: 0.9rem;">View Details &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
