<?php
$companyName   = esc($company3 ?? ($site->name ?? 'Sanvi Packers & Movers'));
$helplinePhone = $phone ?? '+91 70217 10594';
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
$phoneHref     = !empty($phonehtml) ? $phonehtml : 'href="tel:+' . esc($cleanPhone) . '"';
?>

<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Customer Reviews & Ratings',
    'subtitle'    => 'Real experiences from 25,000+ verified relocations across India.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Reviews'],
    ],
]) ?>

<div class="pm-reviews-page-wrap" id="reviewsContainer">
    <div class="container">
        <!-- Hero / Scoreboard Showcase Bar -->
        <div class="pm-reviews-hero-bar mb-4">
            <div class="row align-items-center g-3">
                <div class="col-lg-8">
                    <div class="pm-reviews-hero-flex">
                        <div class="pm-reviews-score-badge">
                            <span class="pm-reviews-score-num">4.9</span>
                            <div class="pm-reviews-score-stars">
                                <i class="bi bi-star-fill" aria-hidden="true"></i>
                                <i class="bi bi-star-fill" aria-hidden="true"></i>
                                <i class="bi bi-star-fill" aria-hidden="true"></i>
                                <i class="bi bi-star-fill" aria-hidden="true"></i>
                                <i class="bi bi-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="pm-reviews-hero-text">
                            <div class="mb-1">
                                <span class="badge pm-service-badge pm-verified-feedback-badge">
                                    <i class="bi bi-patch-check-fill text-success me-1"></i> Verified Customer Feedback
                                </span>
                            </div>
                            <h2 class="pm-reviews-hero-title mb-1">Customer Reviews &amp; Ratings</h2>
                            <p class="pm-reviews-hero-sub mb-0">Genuine ratings and moving experiences shared by our clients across India.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <button type="button" class="pm-btn-red pm-write-review-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square" aria-hidden="true"></i> Write a Review
                    </button>
                </div>
            </div>
        </div>

        <!-- Star Filter Tabs -->
        <div class="pm-star-filter-pills">
            <button type="button" class="pm-star-filter-pill <?= empty($star_filter) ? 'active' : '' ?>" data-star="all" onclick="filterReviewsTab('all', this)">
                All Reviews
            </button>
            <?php for ($s = 5; $s >= 1; $s--): ?>
                <button type="button" class="pm-star-filter-pill <?= ($star_filter == $s) ? 'active' : '' ?>" data-star="<?= $s ?>" onclick="filterReviewsTab(<?= $s ?>, this)">
                    <?= $s ?> <i class="bi bi-star-fill text-warning"></i>
                </button>
            <?php endfor; ?>
        </div>

        <!-- Live Page Success Alert (shown without page reload) -->
        <div id="pageSuccessAlert" class="alert alert-success alert-dismissible fade show rounded-3 d-none" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i><span id="pageSuccessText">Thank you! Your review has been submitted successfully.</span>
            <button type="button" class="btn-close" onclick="document.getElementById('pageSuccessAlert').classList.add('d-none')" aria-label="Close"></button>
        </div>

        <!-- Alerts from PHP Flashdata if any -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= esc(session()->getFlashdata('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= esc(session()->getFlashdata('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Empty state for filtered tabs -->
        <div id="noReviewsMatch" class="pm-reviews-empty-card d-none">
            <div class="pm-reviews-empty-icon-wrap">
                <i class="bi bi-star-fill" aria-hidden="true"></i>
            </div>
            <h3 class="pm-reviews-empty-title">No Reviews In This Rating</h3>
            <p class="pm-reviews-empty-sub">Be the first to share your moving experience with this rating.</p>
            <button type="button" class="pm-btn-red" data-bs-toggle="modal" data-bs-target="#reviewModal">
                <i class="bi bi-pencil-square" aria-hidden="true"></i> Write a Review
            </button>
        </div>

        <!-- Reviews Grid -->
        <div class="row g-4" id="reviewsList">
            <?php if (!empty($reviews)): ?>
                <?php foreach ($reviews as $r): 
                    $starsCount = (int) ($r->stars ?? 5);
                    $pDate = !empty($r->posted_date) ? date('M d, Y', strtotime($r->posted_date)) : '';
                    
                    // Mask email
                    $maskedEmail = '';
                    if (!empty($r->email)) {
                        $parts = explode('@', $r->email);
                        $userPart = $parts[0];
                        $domainPart = $parts[1] ?? '';
                        $len = strlen($userPart);
                        $maskedEmail = ($len > 3) 
                            ? substr($userPart, 0, 2) . str_repeat('*', $len - 3) . substr($userPart, -1) . '@' . $domainPart 
                            : '***@' . $domainPart;
                    }
                    
                    $photos = !empty($r->r_img) ? explode(',', $r->r_img) : [];
                ?>
                    <div class="col-lg-4 col-md-6 review-card-item" data-stars="<?= $starsCount ?>">
                        <div class="pm-review-card" itemprop="review" itemscope itemtype="https://schema.org/Review">
                            <meta itemprop="name" content="<?= esc($r->r_title ?: 'Customer Review') ?>" />
                            <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                <meta itemprop="name" content="<?= esc($company3 ?? '') ?>" />
                            </div>

                            <div class="pm-review-card-top">
                                <div class="pm-review-stars" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="<?= $starsCount ?>" />
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="bi bi-star<?= ($i <= $starsCount) ? '-fill' : '' ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="pm-review-date"><i class="bi bi-clock-history me-1"></i><?= esc($pDate) ?></span>
                            </div>

                            <?php if (!empty($r->r_title) || !empty($r->city)): ?>
                                <span class="pm-review-city-chip">
                                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= esc($r->city ?: $r->r_title) ?>
                                </span>
                            <?php endif; ?>

                            <p class="pm-review-text" itemprop="reviewBody">
                                &ldquo;<?= nl2br(esc($r->r_desc ?? '')) ?>&rdquo;
                            </p>

                            <?php if (!empty($photos)): ?>
                                <div class="d-flex gap-2 mb-3 overflow-hidden">
                                    <?php foreach ($photos as $ph): ?>
                                        <?php if (!empty(trim($ph))): ?>
                                            <img src="<?= base_url(trim($ph)) ?>" class="border pm-review-thumb" alt="Review photo">
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <div class="pm-review-footer">
                                <div class="pm-review-author-wrap">
                                    <div class="pm-review-avatar">
                                        <?= strtoupper(substr($r->name ?? 'C', 0, 1)) ?>
                                    </div>
                                    <div>
                                        <strong class="pm-review-author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                            <span itemprop="name"><?= esc($r->name ?? 'Customer') ?></span>
                                        </strong>
                                        <span class="pm-review-author-email"><?= esc($maskedEmail) ?></span>
                                    </div>
                                </div>
                                <span class="pm-review-verified-pill"><i class="bi bi-patch-check-fill text-success"></i> Verified</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12" id="initialEmptyAlert">
                    <div class="pm-reviews-empty-card">
                        <div class="pm-reviews-empty-icon-wrap">
                            <i class="bi bi-star-fill" aria-hidden="true"></i>
                        </div>
                        <h3 class="pm-reviews-empty-title">No Reviews Yet</h3>
                        <p class="pm-reviews-empty-sub">Be the first to share your moving experience with Sanvi Packers.</p>
                        <button type="button" class="pm-btn-red" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            <i class="bi bi-pencil-square" aria-hidden="true"></i> Write a Review
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_rows > $per_page): ?>
            <div class="d-flex justify-content-center mt-5 pm-reviews-pagination" id="reviewsPagination">
                <ul class="pagination">
                    <?php 
                    $totalPages = ceil($total_rows / $per_page);
                    for ($i = 0; $i < $totalPages; $i++): 
                        $currOffset = $i * $per_page;
                        $active = ($currOffset == $offset) ? 'active' : '';
                        $filterQuery = !empty($star_filter) ? ('&star=' . $star_filter) : '';
                    ?>
                        <li class="page-item <?= $active ?>">
                            <a class="page-link" href="<?= site_url('reviews?per_page=' . $currOffset . $filterQuery) ?>"><?= $i + 1 ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Bottom Action Banner (CTA) -->
        <div class="pm-about-cta-banner mt-5">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-lg-7">
                    <h2 class="pm-about-cta-title">Ready for a 5-Star Moving Experience?</h2>
                    <p class="pm-about-cta-desc">
                        Join 25,000+ satisfied families and corporate teams. Get a transparent quote with zero hidden charges today.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="pm-about-cta-actions justify-content-lg-end">
                        <a <?= $phoneHref ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= esc($helplinePhone) ?></span>
                            <span class="d-md-none">Call Now</span>
                        </a>
                        <a href="https://wa.me/<?= esc($cleanPhone) ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Chat on WhatsApp</span>
                            <span class="d-md-none">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('Modules\Reviews\Views\reviewmodal') ?>

<script>
// Filter tabs without refreshing page
function filterReviewsTab(star, btnEl) {
    document.querySelectorAll('.pm-star-filter-pill').forEach(b => {
        b.classList.remove('active');
    });
    if (btnEl) {
        btnEl.classList.add('active');
    }

    const items = document.querySelectorAll('.review-card-item');
    let visibleCount = 0;

    items.forEach(card => {
        const cardStar = card.getAttribute('data-stars');
        if (star === 'all' || cardStar === String(star)) {
            card.classList.remove('d-none');
            visibleCount++;
        } else {
            card.classList.add('d-none');
        }
    });

    const emptyBox = document.getElementById('noReviewsMatch');
    const initialAlert = document.getElementById('initialEmptyAlert');
    if (initialAlert) initialAlert.classList.add('d-none');

    if (emptyBox) {
        if (visibleCount === 0) {
            emptyBox.classList.remove('d-none');
        } else {
            emptyBox.classList.add('d-none');
        }
    }
}

// Add newly submitted review without page reload
function prependReviewCard(r) {
    const list = document.getElementById('reviewsList');
    const emptyBox = document.getElementById('noReviewsMatch');
    const initialAlert = document.getElementById('initialEmptyAlert');
    if (emptyBox) emptyBox.classList.add('d-none');
    if (initialAlert) initialAlert.classList.add('d-none');

    const card = document.createElement('div');
    card.className = 'col-lg-4 col-md-6 review-card-item';
    card.setAttribute('data-stars', r.stars || 5);

    let starIcons = '';
    const starsCount = parseInt(r.stars) || 5;
    for (let i = 1; i <= 5; i++) {
        starIcons += `<i class="bi bi-star${i <= starsCount ? '-fill' : ''}"></i>`;
    }

    let maskedEmail = '';
    if (r.email) {
        const parts = r.email.split('@');
        const user = parts[0];
        const dom = parts[1] || '';
        maskedEmail = user.length > 3 ? (user.substr(0, 2) + '*'.repeat(user.length - 3) + user.slice(-1) + '@' + dom) : '***@' + dom;
    }

    const firstLetter = (r.name || 'C').charAt(0).toUpperCase();

    card.innerHTML = `
        <div class="pm-review-card">
            <div class="pm-review-card-top">
                <div class="pm-review-stars">
                    ${starIcons}
                </div>
                <span class="badge bg-success-subtle text-success rounded-pill small">Just now</span>
            </div>

            ${r.city ? `<span class="pm-review-city-chip"><i class="bi bi-geo-alt-fill text-danger me-1"></i> ${r.city}</span>` : ''}

            <p class="pm-review-text">
                &ldquo;${r.r_desc || ''}&rdquo;
            </p>

            <div class="pm-review-footer">
                <div class="pm-review-author-wrap">
                    <div class="pm-review-avatar">
                        ${firstLetter}
                    </div>
                    <div>
                        <strong class="pm-review-author-name">${r.name || 'Customer'}</strong>
                        <span class="pm-review-author-email">${maskedEmail}</span>
                    </div>
                </div>
                <span class="pm-review-verified-pill"><i class="bi bi-patch-check-fill text-success"></i> Verified</span>
            </div>
        </div>
    `;

    if (list) {
        list.prepend(card);
    }
}
</script>
