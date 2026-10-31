<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Packers & Movers in ' . esc($stateName),
    'subtitle'    => 'Verified, background-checked moving services connecting households and offices across ' . esc($stateName) . '.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'All States', 'url' => site_url('city')],
        ['title' => $stateName],
    ],
]) ?>

<section class="pm-cities-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <span class="section-badge">
                <i class="bi bi-geo-alt-fill"></i> <?= esc($stateName) ?> Moving Hubs
            </span>
            <h2 class="section-title">Select Your City in <?= esc($stateName) ?></h2>
            <p class="section-subtitle">Click your city for instant free price estimates, local shifting charges, and verified moving coordinators.</p>
        </div>

        <!-- City Cards Grid -->
        <div class="pm-cities-grid">
            <?php foreach ($cities as $c): 
                $cityName = is_array($c) ? ($c['nm'] ?? 'City') : (string)$c;
                $citySlug = strtolower(str_replace(' ', '-', $cityName));
            ?>
                <a href="<?= site_url('city/' . $stateSlug . '/' . $citySlug) ?>" class="pm-city-card" title="Packers and Movers in <?= esc($cityName) ?>">
                    <div class="pm-city-card-left">
                        <div class="pm-city-icon-wrap" aria-hidden="true">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="pm-city-details">
                            <span class="pm-city-name"><?= esc($cityName) ?></span>
                            <span class="pm-city-tag">Verified Hub</span>
                        </div>
                    </div>
                    <div class="pm-city-arrow-wrap" aria-hidden="true">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Other States Quick Navigation -->
        <div class="pm-other-states-box">
            <h3 class="pm-other-states-title">Other Major States Across India</h3>
            <div class="pm-other-states-tags">
                <?php foreach ($allStates as $st): ?>
                    <a href="<?= site_url('city/' . $st['slug']) ?>" class="pm-state-pill-link <?= ($st['slug'] === $stateSlug) ? 'active' : '' ?>">
                        <?= esc($st['name']) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
