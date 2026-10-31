<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'All India Packers & Movers Locations',
    'subtitle'    => 'Door-to-door household relocation, office moving, and vehicle transport across 500+ Indian cities in all major states.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'All India Service Locations'],
    ],
]) ?>

<section class="pm-state-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-badge">
                <i class="bi bi-geo-alt-fill"></i> Nationwide Network
            </span>
            <h2 class="section-title">Select Your State / Union Territory</h2>
            <p class="section-subtitle">Click on your state below to explore verified packers and movers operating in your local city.</p>
        </div>

        <!-- States Grid -->
        <div class="row g-4 justify-content-center pm-states-grid">
            <?php foreach ($states as $st): 
                // Determine image source: custom property or auto-detected file in assets/img/state/
                $imgSrc = '';
                if (!empty($st['image']) && file_exists(FCPATH . $st['image'])) {
                    $imgSrc = base_url($st['image']);
                } else {
                    foreach (['webp', 'jpg', 'jpeg', 'png', 'svg'] as $ext) {
                        if (file_exists(FCPATH . 'assets/img/state/' . $st['slug'] . '.' . $ext)) {
                            $imgSrc = base_url('assets/img/state/' . $st['slug'] . '.' . $ext);
                            break;
                        }
                    }
                }
            ?>
                <div class="col-6 col-sm-6 col-md-4 col-xl-3 pm-state-col">
                    <a href="<?= site_url('city/' . $st['slug']) ?>" class="pm-state-card" title="Packers and Movers in <?= esc($st['name']) ?>">
                        <!-- Image Area -->
                        <div class="pm-state-img-wrap">
                            <?php if (!empty($imgSrc)): ?>
                                <img src="<?= $imgSrc ?>" 
                                     alt="Best Packers and Movers in <?= esc($st['name']) ?> - Verified Relocation Services" 
                                     class="pm-state-img" 
                                     loading="lazy" 
                                     decoding="async" 
                                     width="400" 
                                     height="250">
                            <?php else: ?>
                                <div class="pm-state-placeholder">
                                    <div class="pm-state-placeholder-icon">
                                        <i class="bi bi-buildings"></i>
                                    </div>
                                    <span class="pm-state-watermark"><?= esc($st['code']) ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="pm-state-img-overlay"></div>
                            
                            <!-- State Code Badge -->
                            <span class="pm-state-code-badge"><?= esc($st['code']) ?></span>
                            
                            <!-- Hubs Count Pill -->
                            <span class="pm-state-count-pill">
                                <i class="bi bi-geo-alt-fill"></i> <?= esc($st['cities_count']) ?> Hubs
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="pm-state-body">
                            <div class="pm-state-info">
                                <h3 class="pm-state-name"><?= esc($st['name']) ?></h3>
                                <p class="pm-state-meta">
                                    <i class="bi bi-shield-check text-success"></i> <?= esc($st['cities_count']) ?> Connected Cities
                                </p>
                            </div>
                            <div class="pm-state-arrow-btn" aria-hidden="true">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
