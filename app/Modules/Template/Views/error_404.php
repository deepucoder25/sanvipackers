<?php
/**
 * 404 Page Not Found View
 * Template Module - Sanvi Packers & Movers
 */
?>

<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Page Not Found',
    'subtitle'    => 'The page you requested could not be found or has moved to a new route.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => '404 - Not Found'],
    ],
]) ?>

<section class="pm-404-section">
    <div class="container">
        <div class="pm-404-card">
            <div class="pm-404-accent-top"></div>

            <!-- Big 404 Illustration with Icon Center -->
            <div class="pm-404-number-wrap">
                <span class="pm-404-digit">4</span>
                <div class="pm-404-center-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <span class="pm-404-digit">4</span>
            </div>

            <!-- Heading & Explanation -->
            <span class="badge px-3 py-1 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                <i class="bi bi-compass me-1"></i> Destination Not Found
            </span>
            <h1 class="pm-404-title">Oops! Looks Like We Took a Wrong Turn</h1>
            <p class="pm-404-desc">
                The relocation route or page you are looking for has been moved, renamed, or no longer exists. Let's get you back on the right track!
            </p>

            <!-- Primary Action Buttons -->
            <div class="pm-404-actions">
                <a href="<?= site_url('/') ?>" class="pm-404-btn-primary">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Go to Homepage</span>
                </a>
                <a href="<?= site_url('contact') ?>" class="pm-404-btn-outline">
                    <i class="bi bi-envelope-paper-fill text-danger"></i>
                    <span>Contact Us</span>
                </a>
            </div>

            <!-- Micro Support Strip -->
            <div class="pm-404-support-strip">
                <div>
                    <i class="bi bi-headset text-danger me-1"></i>
                    <span>Need urgent moving assistance?</span>
                </div>
                <div>
                    <a <?= $phonehtml ?? 'href="tel:+917021710594"' ?> class="fw-bold text-dark text-decoration-none">
                        <i class="bi bi-telephone-fill text-danger me-1"></i> <?= esc($phone ?? '+91 70217 10594') ?>
                    </a>
                </div>
                <div>
                    <a href="<?= esc($mailhtml ?? 'mailto:info@sanvipackers.com') ?>" class="text-muted text-decoration-none">
                        <i class="bi bi-envelope-fill me-1"></i> <?= esc($mail ?? 'info@sanvipackers.com') ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

