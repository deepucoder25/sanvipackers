<?php
/**
 * Dynamic Breadcrumb & Page Banner Component (Stylish Ribbon Design)
 *
 * Accepted variables:
 * @var string $title        Main H1 heading of the page
 * @var string $subtitle     Optional subtitle / description paragraph below heading
 * @var array  $breadcrumbs  Breadcrumbs trail. Formats supported:
 *                           1) [['title' => 'Home', 'url' => site_url('/')], ['title' => 'About Us']]
 *                           2) ['Home' => site_url('/'), 'About Us' => '']
 *                           3) Optional: If omitted, auto-generates Home -> $title
 */

$bannerTitle = $title ?? $page_title ?? $banner_title ?? $heading ?? '';
$bannerDesc  = $subtitle ?? $sub_title ?? $desc ?? $description ?? '';

// Normalize breadcrumb items into a unified structure
$trail = [];
if (!empty($breadcrumbs) && is_array($breadcrumbs)) {
    $pos = 1;
    foreach ($breadcrumbs as $k => $v) {
        if (is_array($v)) {
            $trail[] = [
                'title' => $v['title'] ?? $v['label'] ?? $v['name'] ?? $v['text'] ?? '',
                'url'   => $v['url'] ?? $v['link'] ?? $v['href'] ?? '',
                'pos'   => $pos++,
            ];
        } elseif (is_string($k)) {
            $trail[] = [
                'title' => $k,
                'url'   => $v,
                'pos'   => $pos++,
            ];
        } else {
            $trail[] = [
                'title' => (string) $v,
                'url'   => '',
                'pos'   => $pos++,
            ];
        }
    }
} else {
    // Default fallback: Home -> Current Page Title
    $trail = [
        ['title' => 'Home', 'url' => site_url('/'), 'pos' => 1],
        ['title' => $bannerTitle ?: 'Page', 'url' => '', 'pos' => 2],
    ];
}

$lastIdx = count($trail) - 1;
?>
<div class="page-banner">
    <div class="container position-relative z-1">
        <!-- Stylish Segmented Breadcrumb Ribbon -->
        <nav aria-label="breadcrumb" class="mb-2">
            <div class="pm-bc-ribbon" itemscope itemtype="https://schema.org/BreadcrumbList">
                <?php foreach ($trail as $i => $item): ?>
                    <?php 
                    $isLast = ($i === $lastIdx) || empty($item['url']);
                    $isFirst = ($i === 0);
                    ?>
                    <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="pm-bc-segment">
                        <?php if (!$isLast && !empty($item['url'])): ?>
                            <a href="<?= esc($item['url']) ?>" itemprop="item" class="pm-bc-chip">
                                <?php if ($isFirst): ?>
                                    <span class="pm-bc-icon-badge"><i class="bi bi-house-door-fill"></i></span>
                                <?php endif; ?>
                                <span itemprop="name"><?= esc($item['title']) ?></span>
                            </a>
                        <?php else: ?>
                            <div class="pm-bc-chip pm-bc-chip-active">
                                <?php if ($isFirst): ?>
                                    <span class="pm-bc-icon-badge"><i class="bi bi-house-door-fill"></i></span>
                                <?php else: ?>
                                    <span class="pm-bc-active-dot"></span>
                                <?php endif; ?>
                                <span itemprop="name"><?= esc($item['title']) ?></span>
                            </div>
                        <?php endif; ?>
                        <meta itemprop="position" content="<?= $item['pos'] ?>">
                    </div>

                    <?php if (!$isLast): ?>
                        <div class="pm-bc-divider" aria-hidden="true">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </nav>

        <!-- Main Title -->
        <?php if (!empty($bannerTitle)): ?>
            <h1 class="pm-banner-title">
                <?= esc($bannerTitle) ?>
            </h1>
        <?php endif; ?>

        <!-- Subtitle Description -->
        <?php if (!empty($bannerDesc)): ?>
            <p class="pm-banner-subtitle"><?= esc($bannerDesc) ?></p>
        <?php endif; ?>

        <!-- Micro Trust Strip -->
        <div class="pm-banner-trust-strip d-inline-flex align-items-center justify-content-center flex-wrap gap-3">
            <span class="pm-trust-pill">
                <i class="bi bi-patch-check-fill text-danger me-1"></i> ISO 9001:2015
            </span>
            <span class="pm-trust-dot">•</span>
            <span class="pm-trust-pill">
                <i class="bi bi-shield-fill-check text-warning me-1"></i> 100% Insured Moves
            </span>
            <span class="pm-trust-dot">•</span>
            <span class="pm-trust-pill">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> 500+ Indian Cities
            </span>
        </div>
    </div>
</div>
