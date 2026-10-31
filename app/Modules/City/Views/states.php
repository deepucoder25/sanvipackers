<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'All India Packers & Movers Locations',
    'subtitle'    => 'Door-to-door household relocation, office moving, and vehicle transport across 500+ Indian cities in all major states.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'All India Service Locations'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nationwide Network</span>
            <h2 class="section-title">Select Your State / Union Territory</h2>
            <p class="section-subtitle">Click on your state below to explore verified packers and movers operating in your local city.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
            <?php foreach ($states as $st): ?>
                <a href="<?= site_url('city/' . $st['slug']) ?>" class="service-box" style="display: flex; align-items: center; justify-content: space-between; padding: 22px 25px; text-decoration: none;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.95rem;">
                            <?= esc($st['code']) ?>
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--dark); margin-bottom: 2px;"><?= esc($st['name']) ?></h4>
                            <span style="font-size: 0.82rem; color: var(--text-muted);"><?= esc($st['cities_count']) ?> Cities Connected</span>
                        </div>
                    </div>
                    <div style="color: var(--primary); font-size: 1.1rem;">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
