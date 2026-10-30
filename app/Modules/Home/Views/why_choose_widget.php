<?php
$advantages = [
    ['icon' => 'fa-shield-halved', 'title' => '100% Insured Transit', 'desc' => 'Comprehensive transit insurance policy for complete peace of mind throughout the journey.'],
    ['icon' => 'fa-clock', 'title' => 'On-Time Guarantee', 'desc' => 'Strict schedule compliance with live GPS updates and committed delivery windows.'],
    ['icon' => 'fa-tags', 'title' => 'Transparent Rates', 'desc' => 'Zero hidden charges, upfront transparent quotes with no surprise toll or packaging costs.'],
    ['icon' => 'fa-user-tie', 'title' => 'Trained & Verified Crew', 'desc' => 'Background-checked movers who handle delicate electronics, antiques, and heavy furniture.'],
    ['icon' => 'fa-truck-fast', 'title' => 'Nationwide Container Fleet', 'desc' => 'Modern fleet of weatherproof enclosed container trucks connecting 500+ Indian cities.'],
    ['icon' => 'fa-headset', 'title' => '24x7 Personal Support', 'desc' => 'A dedicated relocation officer assigned to guide you from pickup survey until final unboxing.'],
];
?>
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Core Advantages</span>
            <h2 class="section-title">Why Choose Us For Your Move?</h2>
            <p class="section-subtitle">We combine proven field experience with modern logistics practices for a safe shifting experience.</p>
        </div>
        <div class="card-grid">
            <?php foreach ($advantages as $w): ?>
                <div style="background: #ffffff; padding: 25px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); display: flex; gap: 18px; align-items: flex-start;">
                    <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="fa-solid <?= $w['icon'] ?>"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--dark); margin-bottom: 6px;"><?= $w['title'] ?></h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5;"><?= $w['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
