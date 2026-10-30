<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / 
            <a href="<?= site_url('city') ?>">All States</a> / 
            <span><?= esc($stateName) ?></span>
        </div>
        <h1>Packers & Movers in <?= esc($stateName) ?></h1>
        <p>Verified, background-checked moving services connecting households and offices across <?= esc($stateName) ?>.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><?= esc($stateName) ?> Moving Hubs</span>
            <h2 class="section-title">Select Your City in <?= esc($stateName) ?></h2>
            <p class="section-subtitle">Click your city for instant free price estimates, local shifting charges, and moving coordinators.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 50px;">
            <?php foreach ($cities as $c): 
                $cityName = is_array($c) ? ($c['nm'] ?? 'City') : (string)$c;
                $citySlug = strtolower(str_replace(' ', '-', $cityName));
            ?>
                <a href="<?= site_url('city/' . $stateSlug . '/' . $citySlug) ?>" style="background: #ffffff; padding: 16px 20px; border-radius: var(--radius-md); border: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between; text-decoration: none; transition: all 0.2s ease;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-location-dot" style="color: var(--primary);"></i>
                        <span style="font-weight: 700; color: var(--dark); font-size: 0.95rem;"><?= esc($cityName) ?></span>
                    </div>
                    <span style="font-size: 0.8rem; color: var(--text-muted);">&rarr;</span>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Other States Quick Navigation -->
        <div style="background: #ffffff; padding: 35px; border-radius: var(--radius-lg); border: 1px solid var(--border-color);">
            <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 20px; color: var(--dark);">Other Major States Across India</h3>
            <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                <?php foreach ($allStates as $st): ?>
                    <a href="<?= site_url('city/' . $st['slug']) ?>" style="display: inline-block; padding: 8px 16px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 0.88rem; font-weight: 600; color: var(--text-main);">
                        <?= esc($st['name']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
